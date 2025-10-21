<?php

namespace App\Livewire\Attendance;

use App\Models\Attendance;
use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class AttendanceDetails extends Component
{
    use WithPagination;

    public $search;

    public $employee_id;

    public $attendance_checks = [];

    protected $queryString = ['search'];

    public function mount(Employee $employee)
    {
        $this->employee_id = $employee->id;
    }

    public function render()
    {
        $attendances = Attendance::whereHas('scheduling', function ($q) {
            return $q->where('employee_id', $this->employee_id);
        })->paginate(10);

        return view('livewire.attendance.attendance-details', [
            'attendances' => $attendances
        ]);
    }

    public function showAttendanceChecks(Attendance $attendance)
    {
        $this->attendance_checks = $attendance->attendanceChecks;
        $this->dispatch('openAttendanceChecksModal');
    }
}
