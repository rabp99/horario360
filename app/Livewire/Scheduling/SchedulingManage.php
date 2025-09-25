<?php

namespace App\Livewire\Scheduling;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Employee;
use App\Models\Service;

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

    public $name;

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
        logger('dasdas');
        $this->services = [];
    }

    public function deSelectService()
    {
        $this->queryService = null;
        $this->selectedServiceId = null;
    }

    public function mount()
    {
        $year = 2025;
        $month = 12;
        $this->date = Carbon::createFromDate($year, $month, 1);

        $this->daysInMonth = $this->date->daysInMonth;

        $this->startDay = $this->date->dayOfWeek;

        $totalCells = $this->startDay + $this->daysInMonth;
        $this->remaining = (7 - ($totalCells % 7)) % 7;
    }

    public function render()
    {
        return view('livewire.scheduling.scheduling-manage');
    }
}
