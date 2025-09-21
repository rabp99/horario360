<?php

namespace App\Livewire\Position;

use App\Models\Position;
use Livewire\Component;
use Livewire\WithPagination;

class PositionIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $positions = Position::where('is_active', true)->paginate(10);

        return view('livewire.position.position-index', [
            'positions' => $positions
        ]);
    }
}
