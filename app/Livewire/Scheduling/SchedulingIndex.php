<?php

namespace App\Livewire\Scheduling;

use App\Models\SchedulingPeriod;
use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class SchedulingIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $schedulingPeriods = SchedulingPeriod::orderBy('year', 'desc')
            ->orderBy('month', 'desc')
            ->paginate(10);

        return view('livewire.scheduling.scheduling-index', [
            'schedulingPeriods' => $schedulingPeriods
        ]);
    }
}
