<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Interlocuteur;
use Illuminate\Support\Facades\Auth;

class InterlocuteurController extends Controller
{
    public function index()
    {
        $interlocuteurs = Interlocuteur::all();
        return view('interlocuteur.index', compact('interlocuteurs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'telephone' => 'required',
            'email' => 'required',
            'poste' => 'required',
        ]);
        $interlocuteurs = new Interlocuteur();
        $interlocuteurs->nom = $request->nom;
        $interlocuteurs->telephone = $request->telephone;
        $interlocuteurs->email = $request->email;
        $interlocuteurs->poste = $request->poste;
        $interlocuteurs->user_id = Auth::user()->id;
        $save = $interlocuteurs->save();

        if ($save) {
            return back()->with('success', 'Interlocuteur créer avec succès');
        } else {
            return back()->with('fail', 'Echec de création');
        }
    }

    public function edit($id)
    {
        $interlocuteur = Interlocuteur::find($id);
        return view('interlocuteur.edit', compact('interlocuteur'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'telephone' => 'required|max:9|',
            'email' => 'required|',
            'poste' => 'required|',
        ]);
        $update = [
            "nom" => $request->nom,
            "telephone" => $request->telephone,
            "email" => $request->email,
            "poste" => $request->poste,
        ];
        Interlocuteur::where('id', $id)->update($update);
        return redirect()->route('interlocuteurs.index')->with('success', 'Interlocuteur modifié avec succès');
    }
}
