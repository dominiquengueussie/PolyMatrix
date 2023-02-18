<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
     public function index()
    {
        $users = User::all();
        return view('Users.index', compact('users'));
    } 


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   /*  public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required'
        ]);
        $agences = new Agence();
        $agences->nom = $request->nom;
        $save = $agences->save();

        if ($save) {
            return back()->with('success', 'Agence créer avec succès');
        } else {
            return back()->with('fail', 'Echec de création');
        }
    } */

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agences = Agence::all();
        $roles = Roles::all();
        $user = User::find($id);
        return view('Users.edit', compact(['user','agences','roles']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'email' => 'required',
            'poste' => 'required',
            'telephone' => 'required',
            'agence' => 'required',
            'role' => 'required'
        ]);
        $update = [
            "nom" => $request->nom,
            "email" => $request->email,
            "poste" => $request->poste,
            "telephone" => $request->telephone,
            "agence_id" => $request->agence,
            "role_id" => $request->role,
        ];
        User::where('id', $id)->update($update);
        return redirect()->route('users.index')->with('success', 'Utilisateur modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect()->route('users.index')->with('warning', 'SUCCESS');
    }
}
