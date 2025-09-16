<?php

namespace App\Livewire\Schedule;

use App\Models\ScheduleType;
use Livewire\Component;
use Livewire\WithPagination;

class ScheduleCreate extends Component
{
    public function render()
    {
        return view('livewire.schedule.schedule-create');
    }
}
