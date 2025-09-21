<?php

namespace App\Livewire\Area;

use Livewire\Component;
use App\Models\Area;

class AreaCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.area.area-create');
    }

    public function store()
    {
        try {
            Area::create([
                'name' => $this->name,
                'is_active' => true
            ]);

            redirect()->route('area.area-index')->with('success', 'La Unidad Orgánica fue registrada correctamente.');
        } catch (\Throwable $th) {
            session()->flash('error', 'La Unidad Orgánica no fue registrada correctamente.');
        }
    }
}
