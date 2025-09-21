<?php

namespace App\Livewire\Service;

use Livewire\Component;
use App\Models\Service;

class ServiceCreate extends Component
{
    public $name;

    public function render()
    {
        return view('livewire.service.service-create');
    }

    public function store()
    {
        try {
            Service::create([
                'name' => $this->name,
                'is_active' => true
            ]);

            redirect()->route('service.service-index')->with('success', 'El Servicio fue registrado correctamente.');
        } catch (\Throwable $th) {
            logger($th->getMessage());
            session()->flash('error', 'El Servicio no fue registrado correctamente.');
        }
    }
}
