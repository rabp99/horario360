<?php

namespace App\Livewire\Area;

use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;

class AreaIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $areas = Area::where('is_active', true)->paginate(10);

        return view('livewire.area.area-index', [
            'areas' => $areas
        ]);
    }
}
