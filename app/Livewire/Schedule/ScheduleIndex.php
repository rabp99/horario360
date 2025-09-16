<?php

namespace App\Livewire\Schedule;

use App\Models\ScheduleType;
use Livewire\Component;
use Livewire\WithPagination;

class ScheduleIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $scheduleTypes = ScheduleType::where('is_active', true)->paginate(10);

        return view('livewire.schedule.schedule-index', [
            'scheduleTypes' => $scheduleTypes
        ]);
    }

    public function showScheduleDetails($day) {}
}
