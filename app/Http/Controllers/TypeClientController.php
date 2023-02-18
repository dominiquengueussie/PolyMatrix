<?php

namespace App\Http\Controllers;

use App\Models\TypeClient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TypeClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = TypeClient::all();
        return view('typeClient.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required'
        ]);
        $types = new TypeClient();
        $types->nom = $request->nom;
        $types->user_id = Auth::user()->id;
        $save = $types->save();

        if ($save) {
            return back()->with('success', 'type de client créer avec succès');
        } else {
            return back()->with('fail', 'Echec de création');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type = TypeClient::find($id);
        return view('typeClient.edit', compact('type'));
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
            'nom' => 'required'
        ]);
        $update = [
            "nom" => $request->nom,
        ];
        TypeClient::where('id', $id)->update($update);
        return redirect()->route('type_client.index')->with('success', 'Tye de client modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TypeClient::destroy($id);
        return redirect()->route('type_client.index')->with('warning', 'suppression du type de client');
    }
}
