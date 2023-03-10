<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EValuationSuperviseurList extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.e-valuation-superviseur-list', compact('users'));
    }
}