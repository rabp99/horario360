<?php

namespace App\Livewire\Employee;

use Livewire\Component;
use App\Models\Area;
use App\Models\Employee;

class EmployeeCreate extends Component
{
    public $hasEmploymentHistory = false;

    public $areas;
    public $documentTypes;
    public $genders;
    public $maritalStatuses;
    public $has_disability = false; 

    public $newEmployeeEmployment = [
        'area_id' => null
    ];

    public function mount()
    {
        $this->areas = Area::all();
        $this->documentTypes = Employee::DOCUMENT_TYPES;
        $this->genders = Employee::GENDERS;
        $this->maritalStatuses = Employee::MARITAL_STATUSES;
    }

    public function render()
    {
        return view('livewire.employee.employee-create');
    }
}
