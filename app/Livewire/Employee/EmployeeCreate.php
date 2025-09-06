<?php

namespace App\Livewire\Employee;

use Livewire\Component;
use App\Models\Area;

class EmployeeCreate extends Component
{
    public $hasEmploymentHistory = false;

    public $areas;

    public $newEmployeeEmployment = [
        'area_id' => null
    ];

    public function mount()
    {
        $this->areas = Area::all();
    }

    public function render()
    {
        return view('livewire.employee.employee-create');
    }
}
