<?php

namespace App\Http\Livewire;

use App\Models\TypeClient;
use Livewire\Component;
use Livewire\WithPagination;

class TypeClientList extends Component
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
        return view('livewire.type-client-list',['types' => TypeClient::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
    }
}
