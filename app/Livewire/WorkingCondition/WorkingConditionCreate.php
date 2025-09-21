<?php

namespace App\Livewire\WorkingCondition;

use Livewire\Component;
use App\Models\WorkingCondition;

class WorkingConditionCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.working-condition.working-condition-create');
    }

    public function store()
    {
        try {
            WorkingCondition::create([
                'name' => $this->name,
                'is_active' => true
            ]);

            redirect()->route('working-condition.working-condition-index')->with('success', 'La Condición Laboral fue registrada correctamente.');
        } catch (\Throwable $th) {
            logger($th->getMessage());
            session()->flash('error', 'La Condición Laboral no fue registrada correctamente.');
        }
    }
}
