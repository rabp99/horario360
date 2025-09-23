<?php

namespace App\Livewire\Scheduling;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\Employee;

class SchedulingManage extends Component
{
    public $date;

    public $daysInMonth;

    public $startDay;

    public $remaining;

    public $query = '';

    public $employees = [];

    public $selectedId = null;

    public function updatedQuery()
    {
        $this->employees = Employee::where('first_name', 'like', '%' . $this->query . '%')
            ->limit(10)
            ->get();
    }

    public function selectEmployee($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $this->query = $employee->name;
            $this->selectedId = $employee->id;
            $this->employees = [];
        }
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
