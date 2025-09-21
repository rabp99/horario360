<?php

namespace App\Livewire\Service;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithPagination;

class ServiceIndex extends Component
{
    use WithPagination;

    public $search;

    protected $queryString = ['search'];

    public function render()
    {
        $services = Service::where('is_active', true)->paginate(10);

        return view('livewire.service.service-index', [
            'services' => $services
        ]);
    }
}
