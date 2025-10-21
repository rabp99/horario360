<?php

namespace App\Livewire\Attendance;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class AttendanceIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $employees = Employee::paginate(10);

        return view('livewire.attendance.attendance-index', [
            'employees' => $employees
        ]);
    }
}
