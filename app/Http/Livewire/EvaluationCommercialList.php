<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class EvaluationCommercialList extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.evaluation-commercial-list', compact('users'));
    }
}