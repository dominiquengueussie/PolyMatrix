<?php

namespace App\Http\Livewire;

use App\Models\ZoneCommerciale;
use Livewire\Component;
use Livewire\WithPagination;

class ZoneCommercialeList extends Component
{
    use WithPagination;
    public $perPage = 5;
    public $query;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.zone-commerciale-list', ['zones' => ZoneCommerciale::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage)]);
    }
}
