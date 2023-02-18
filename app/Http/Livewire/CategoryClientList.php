<?php

namespace App\Http\Livewire;

use App\Models\Categorie;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryClientList extends Component
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
        return view('livewire.category-client-list',['categorys' => Categorie::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
    }
}
