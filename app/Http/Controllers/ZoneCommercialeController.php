<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ZoneCommerciale;
use Illuminate\Support\Facades\Auth;

class ZoneCommercialeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zones = ZoneCommerciale::all();
        return view('zone_commerciale.index', compact('zones'));
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
        $agences = new ZoneCommerciale();
        $agences->nom = $request->nom;
        $agences->user_id = Auth::user()->id;
        $save = $agences->save();

        if ($save) {
            return back()->with('success', 'Zone commerciale créer');
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
        $zone = ZoneCommerciale::find($id);
        return view('zone_commerciale.edit', compact('zone'));
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
        ZoneCommerciale::where('id', $id)->update($update);
        return redirect()->route('zone_commerciale.index')->with('success', 'Zone modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ZoneCommerciale::destroy($id);
        return redirect()->route('zone_commerciale.index')->with('warning', 'SUCCESS');
    }
}
