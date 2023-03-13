<?php

namespace App\Http\Livewire;

use App\Models\Agence;
use App\Models\User;
use Livewire\Component;

class EvaluationCommercialList extends Component
{
    public function render()
    {
        $users = User::all();
        $agences = Agence::all();
        return view('livewire.evaluation-commercial-list', compact('users','agences'));
    }
}