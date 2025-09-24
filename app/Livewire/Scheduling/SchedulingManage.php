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

    public $selectedEmployeeId = null;

    public function updatedQuery()
    {
        $query = Employee::query();

        if ($this->query && !$this->selectedEmployeeId) {
            $query->where('first_name', 'like', '%' . $this->query . '%');
        }

        $this->employees = $query
            ->limit(10)
            ->get();
    }

    public function selectEmployee($id)
    {
        logger('11111111');
        $employee = Employee::find($id);
        if ($employee) {
            $this->query = $employee->full_name;
            $this->selectedEmployeeId = $employee->id;
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

    public function onQueryFocus()
    {
        $this->updatedQuery();
    }

    public function onQueryBlur()
    {
        $this->employees = [];
    }
}
