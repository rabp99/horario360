<?php

namespace App\Livewire\WorkingCondition;

use App\Models\WorkingCondition;
use Livewire\Component;
use Livewire\WithPagination;

class WorkingConditionIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $workingConditions = WorkingCondition::where('is_active', true)->paginate(10);

        return view('livewire.working-condition.working-condition-index', [
            'workingConditions' => $workingConditions
        ]);
    }
}
