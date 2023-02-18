<?php

namespace App\Http\Livewire;

use App\Models\Agence;
use Livewire\Component;
use Livewire\WithPagination;

class AgenceList extends Component
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
        //return view('livewire.roles-list', ['roles' => Role::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
        return view('livewire.agence-list',['agences' => Agence::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
    }

    
}
