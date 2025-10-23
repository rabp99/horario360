<?php

namespace App\Livewire\Holiday;

use App\Models\Holiday;
use Livewire\Component;
use Livewire\WithPagination;

class HolidayIndex extends Component
{
    use WithPagination;

    public $search;

    public $year;

    protected $queryString = ['search', 'year'];

    public function render()
    {
        $holidays = Holiday::paginate(10);

        return view('livewire.holiday.holiday-index', [
            'holidays' => $holidays
        ]);
    }
}
