<?php

namespace App\Livewire\Dashboard;

use App\Models\Area;
use Livewire\Component;
use Livewire\WithPagination;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard.dashboard');
    }
}
