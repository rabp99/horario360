<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;

class EmployeeIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $employees = Employee::paginate(10);

        return view('livewire.employee.employee-index', [
            'employees' => $employees
        ]);
    }
}
