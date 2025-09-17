<?php

namespace App\Livewire\Schedule;

use App\Models\ScheduleType;
use Livewire\Component;
use Livewire\WithPagination;

class ScheduleIndex extends Component
{
    use WithPagination;

    public $search;

    public $selectedScheduleType;

    protected $queryString = ['search'];

    public function render()
    {
        $scheduleTypes = ScheduleType::where('is_active', true)->paginate(10);

        return view('livewire.schedule.schedule-index', [
            'scheduleTypes' => $scheduleTypes
        ]);
    }

    public function showScheduleDetails(ScheduleType $scheduleType)
    {
        $this->selectedScheduleType = $scheduleType;
        $this->dispatch('open-schedule-details-modal');
    }
}
