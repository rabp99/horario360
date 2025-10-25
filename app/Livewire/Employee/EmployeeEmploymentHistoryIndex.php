<?php

namespace App\Livewire\Employee;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\EmployeeEmploymentHistory;



class EmployeeEmploymentHistoryIndex extends Component
{
    use WithPagination;

    public $employeeId;
    public $employeeFullName = '';

    public function mount($employeeId) // Agregar este método
    {
        $this->employeeId = $employeeId;
    }

    public function render()
    {        
        $employmentHistorys = EmployeeEmploymentHistory::with([
            'employee',
            'position',
            'workingConditionDetail',
            'area',
            'pensionScheme'])
            ->where('is_active', true)
            ->where('employee_id', $this->employeeId)
            ->paginate(10);
        
        $this->employeeFullName = $employmentHistorys->first()?->employee->full_name;
     
        return view('livewire.employee.employee-employment-history-index', [
            'employmentHistorys' => $employmentHistorys            
        ]);
    }
}
