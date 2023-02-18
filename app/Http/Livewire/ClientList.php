<?php

namespace App\Http\Livewire;

use App\Models\Agence;
use App\Models\Clients;
use Livewire\Component;
use App\Models\Categorie;
use App\Models\TypeClient;
use Livewire\WithPagination;
use App\Models\ZoneCommerciale;

class ClientList extends Component
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
        return view('livewire.client-list', 
        [
            'agences' => Agence::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage),
            'zones' => ZoneCommerciale::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage),
            'categories' => Categorie::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage),
            'types' => TypeClient::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage),
            'clients' => Clients::where('designation', 'like', '%' . $this->query . '%')->paginate($this->perPage)
        ]);
    }
}
