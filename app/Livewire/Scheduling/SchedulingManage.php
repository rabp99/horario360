<?php

namespace App\Livewire\Scheduling;

use App\Models\Attendance;
use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Employee;
use App\Models\Schedule;
use App\Models\Scheduling;
use App\Models\SchedulingPeriodsArea;
use App\Models\Service;
use App\Models\ScheduleDetail;
use App\Models\AttendanceCheck;
use Illuminate\Support\Facades\DB;

class SchedulingManage extends Component
{
    public $date;

    public $daysInMonth;

    public $startDay;

    public $remaining;

    public $queryEmployee = '';

    public $employees = [];

    public $selectedEmployeeId = null;

    public $queryService = '';

    public $services = [];

    public $selectedServiceId = null;

    public $schedule_id;

    public $schedules = [];

    public $attendances = [];

    public $year;

    public $month;

    public $schedulingPeriodsArea;

    public function updatedQueryEmployee()
    {
        $query = Employee::query();

        if ($this->queryEmployee && !$this->selectedEmployeeId) {
            $query->where('first_name', 'like', '%' . $this->queryEmployee . '%');
        }

        $this->employees = $query
            ->limit(10)
            ->get();
    }

    public function selectEmployee($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $this->queryEmployee = $employee->full_name;
            $this->selectedEmployeeId = $employee->id;
            $this->employees = [];
            $this->schedules = Schedule::where('schedule_type_id', $employee->schedule_type_id)->get();
        }
    }

    public function onQueryEmployeeFocus()
    {
        $this->updatedQueryEmployee();
    }

    public function onQueryEmployeeBlur()
    {
        $this->employees = [];
    }

    public function deSelectEmployee()
    {
        $this->queryEmployee = null;
        $this->selectedEmployeeId = null;
    }

    public function updatedQueryService()
    {
        $query = Service::query();

        if ($this->queryService && !$this->selectedServiceId) {
            $query->where('name', 'like', '%' . $this->queryService . '%');
        }

        $this->services = $query
            ->limit(10)
            ->get();
    }

    public function selectService($id)
    {
        $service = Service::find($id);
        if ($service) {
            $this->queryService = $service->name;
            $this->selectedServiceId = $service->id;
            $this->services = [];
        }
    }

    public function onQueryServiceFocus()
    {
        $this->updatedQueryService();
    }

    public function onQueryServiceBlur()
    {
        $this->services = [];
    }

    public function deSelectService()
    {
        $this->queryService = null;
        $this->selectedServiceId = null;
    }

    public function mount(SchedulingPeriodsArea $schedulingPeriodsArea)
    {
        $this->schedulingPeriodsArea = $schedulingPeriodsArea;
        $this->year = $schedulingPeriodsArea->schedulingPeriod->year;
        $this->month = $schedulingPeriodsArea->schedulingPeriod->month;

        $this->date = Carbon::createFromDate($this->year, $this->month, 1);

        $this->daysInMonth = $this->date->daysInMonth;

        $this->startDay = $this->date->dayOfWeek;

        $totalCells = $this->startDay + $this->daysInMonth;
        $this->remaining = (7 - ($totalCells % 7)) % 7;
    }

    public function render()
    {
        return view('livewire.scheduling.scheduling-manage');
    }

    public function onSelectDate($day)
    {
        $this->attendances[$day] = [
            'employee_id' => $this->selectedEmployeeId,
            'schedule_id' => $this->schedule_id,
            'schedule_name' => Schedule::find($this->schedule_id)->name,
            'service_id' => $this->selectedServiceId,
            'service_name' => Service::find($this->selectedServiceId)->name
        ];
    }

    public function store()
    {
        try {
            DB::beginTransaction();

            $scheduling = Scheduling::create([
                'employee_id' => $this->selectedEmployeeId,
                'scheduling_periods_area_id' => $this->schedulingPeriodsArea->id,
            ]);

            foreach ($this->attendances as $key => $attendance) {
                $attendanceDate = Carbon::createFromDate($this->year, $this->month, $key);
                $attendance = Attendance::create([
                    'scheduling_id' => $scheduling->id,
                    'schedule_id' => $attendance['schedule_id'],
                    'service_id' => $attendance['service_id'],
                    'attendance_date' => $attendanceDate,
                    'state' => 'pending',
                ]);

                $scheduleDetail = ScheduleDetail::where('schedule_id', $attendance['schedule_id'])
                    ->where('day', $attendanceDate->dayOfWeek)->first();

                if (!$scheduleDetail && count($scheduleDetail->scheduleDetailChecks)) {
                    continue;
                }

                foreach ($scheduleDetail->scheduleDetailChecks as $scheduleDetailCheck) {
                    $checkTimeExpected = Carbon::createFromFormat('Y-m-d H:i:s', $attendanceDate->format('Y-m-d') . ' ' . $scheduleDetailCheck->check_time);
                    AttendanceCheck::create([
                        'attendance_id' => $attendance->id,
                        'check_time_expected' => $checkTimeExpected,
                        'check_type' => $scheduleDetailCheck->check_type,
                    ]);
                }

                DB::commit();

                redirect()->route('scheduling.scheduling-index')->with('success', 'La Programación fue registrada correctamente.');
            }
        } catch (\Throwable $th) {
            DB::rollBack();
            logger($th->getMessage());
            session()->flash('error', 'La Programación no fue registrada correctamente.');
            dd($th);
        }
    }
}
