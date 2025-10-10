<?php

namespace App\Livewire\Employee;

use App\Models\Employee;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Log;

class EmployeeIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public $employeeIdToDelete;

    public function render()
    {
        $employees = Employee::paginate(10);

        return view('livewire.employee.employee-index', [
            'employees' => $employees
        ]);
    }

    public function setEmployeeToDelete($employeeId)
    {
        $this->employeeIdToDelete = $employeeId;        
         Log::info('store:', [
                'valor' => $this->employeeIdToDelete
            ]);     
        $this->dispatch('openDeleteModal');
    }

    public function delete()
    {
        try {
            $employee = Employee::findOrFail($this->employeeIdToDelete);
            $employee->delete();

            $this->employeeIdToDelete = null; // Reset after deletion
            $this->dispatch('closeDeleteModal'); // Emite evento para Alpine            
            session()->flash('success', 'El trabajador fue eliminado correctamente.');
        } catch (\Throwable $th) {
            Log::error('Error deleting employee: ' . $th->getMessage());
            session()->flash('error', 'No se pudo eliminar el trabajador.');
        }
    }
}
