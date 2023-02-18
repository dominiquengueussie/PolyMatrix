<?php

namespace App\Http\Livewire;

use App\Models\Roles;
use Livewire\Component;
use Livewire\WithPagination;

class RoleList extends Component
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
        return view('livewire.role-list',['roles' => Roles::where('nom', 'like', '%'.$this->query .'%')->paginate($this->perPage)]);
    }
}
