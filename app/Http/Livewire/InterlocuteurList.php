<?php

namespace App\Http\Livewire;

use App\Models\Interlocuteur;
use Livewire\Component;
use Livewire\WithPagination;

class InterlocuteurList extends Component
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
        return view('livewire.interlocuteur-list', ['interlocuteurs' => Interlocuteur::where('nom', 'like', '%' . $this->query . '%')->paginate($this->perPage)]);
    }
}
