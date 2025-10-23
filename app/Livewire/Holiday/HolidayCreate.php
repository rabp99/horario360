<?php

namespace App\Livewire\Holiday;

use Livewire\Component;
use App\Models\Holiday;
use Illuminate\Support\Carbon;

class HolidayCreate extends Component
{
    public $state = [];

    public function mount()
    {
        $this->state = [
            'year' => Carbon::now()->year,
            'holiday_date' => Carbon::now()->format('Y-m-d')
        ];
    }

    public function render()
    {
        return view('livewire.holiday.holiday-create');
    }

    public function store()
    {
        try {
            Holiday::create([
                'year' => $this->state['year'],
                'holiday_date' => $this->state['holiday_date'],
                'description' => $this->state['description'],
                'is_past_date' => false,
                'user_creator_id' => auth()->user()->id,
            ]);

            redirect()->route('holiday.holiday-index')->with('success', 'El feriado fue registrado correctamente.');
        } catch (\Throwable $th) {
            session()->flash('error', 'El feriado no fue registrado correctamente.');
        }
    }
}
