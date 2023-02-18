<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    public $perPage = 10;
    public $query;

    public function updatingQuery()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-list',['users' => User::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
    }
   
}
