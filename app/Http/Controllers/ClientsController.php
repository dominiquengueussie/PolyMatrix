<?php

namespace App\Http\Controllers;

use App\Models\Agence;
use App\Models\Categorie;
use App\Models\Clients;
use App\Models\TypeClient;
use Illuminate\Http\Request;
use App\Models\ZoneCommerciale;
use Illuminate\Support\Facades\Auth;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Clients::all();
        $agences = Agence::all();
        $zones = ZoneCommerciale::all();
        $categories = Categorie::all();
        $types = TypeClient::all();
        return view('client.index', compact(['clients', 'agences', 'zones','categories','types']));
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
        //return dd($request->all());
        $request->validate([
            'designation' => 'required',
            'pays' => 'required',
            'ville' => 'required',
            'agence' => 'required',
            'quartier' => 'required',
            'zone' => 'required',
            'typologie' => 'required',
            'reseau' => 'required',
            'statut' => 'required',
        ]);
        $clients = new Clients();
        $clients->designation = $request->designation;
        $clients->pays = $request->pays;
        $clients->ville = $request->ville;
        $clients->agence_id = $request->agence;
        $clients->zone_commerciale_id = $request->zone;
        $clients->quartier = $request->quartier;
        $clients->typologie = $request->typologie;
        $clients->reseau = $request->reseau;
        $clients->statut = $request->statut;
        $clients->longitude = $request->longitude;
        $clients->latitude = $request->latitude;
        $clients->categorie_id =  $request->categorie;
        $clients->type_client_id =  $request->type;
        $clients->user_id = Auth::user()->id;
        $save = $clients->save();

        if ($save) {
            return back()->with('success', 'Client créer avec succès');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
