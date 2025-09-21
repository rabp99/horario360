<?php

namespace App\Livewire\Position;

use Livewire\Component;
use App\Models\Position;

class PositionCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.position.position-create');
    }

    public function store()
    {
        try {
            Position::create([
                'name' => $this->name,
                'is_active' => true
            ]);

            redirect()->route('position.position-index')->with('success', 'El Cargo fue registrado correctamente.');
        } catch (\Throwable $th) {
            logger($th->getMessage());
            session()->flash('error', 'El Cargo no fue registrado correctamente.');
        }
    }
}
