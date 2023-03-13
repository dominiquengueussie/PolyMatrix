<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MultiSheetExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\EvaluationSuperviseur;
use App\Exports\EvaluationCommercialExport;
use App\Exports\EvaluationSuperviseurExport;

class EvaluationSuperviseurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluation_superviseur.index');
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


    public function showAll()
    {
        $evaluations = EvaluationSuperviseur::all();
        return view('evaluation_superviseur.show', compact('evaluations'));
    }

    public function exportExcel()
    {
        //return Excel::download(new EvaluationSuperviseurExport, 'evaluation_superviseur.xlsx');
        return Excel::download(new MultiSheetExport, 'exported_data.xlsx');

    }

    public function export()
    {
        return view('evaluation_superviseur.export');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return dd($request->nom_superviseur);
        $request->validate([
            'check1'  => 'required',
            'check2'  => 'required',
            'check3'  => 'required',
            'check4'  => 'required',
            'check5'  => 'required',
            'check6'  => 'required',
            'check7'  => 'required',
            'check8'  => 'required',
            'check9'  => 'required',
            'check10' => 'required',
            'check11' => 'required',
            'check12' => 'required',
            'check13' => 'required',
            'check14' => 'required',
        ]);
        // DEBUT DE JOURNEE
        $note_deb =  ($request->check1 + $request->check2  + $request->check3  + $request->check4 + $request->check5) / 20;
        $note_debut = number_format($note_deb, 2) * 100;
        //NOTE RENCONTRE AVEC LE CLIENT

        $note_rencont =  ($request->check6  + $request->check7 + $request->check8  + $request->check9 + $request->check10  + $request->check11 + $request->check12) / 28;
        $note_rencontre = number_format($note_rencont, 2) * 100;


        // FIN DE LA JOURNEE
        $note_fin =  ($request->check13 + $request->check14) / 8;
        $note_finj = number_format($note_fin, 2) * 100;

        $note_tot =  ($request->check1 + $request->check2 + $request->check3 + $request->check4 + $request->check5 + $request->check6 + $request->check7 + $request->check8 + $request->check9 + $request->check10 + $request->check11 + $request->check12 + $request->check13 + $request->check14) / 56;
        $note_totale = number_format($note_tot, 2) * 100;
        //return dd($note_totale);

        $evaluations = new EvaluationSuperviseur();

        //debut de journée
        $evaluations->name_user = $request->nom_superviseur;
        $evaluations->nom_manager                          = Auth::user()->nom;
        $evaluations->preparation                          = $request->check1;
        $evaluations->environnement_et_style               = $request->check2;
        $evaluations->resultat_de_lapprentissage           = $request->check3;
        $evaluations->point_sur_les_outils                 = $request->check4;
        $evaluations->discussion_de_coaching = $request->check5;
        $evaluations->note_debut_de_journee                = $note_debut;

        // rencontre avec le client
        $evaluations->objectif_smart_client_par_visite     = $request->check6;
        $evaluations->competences_cles_PWS                 = $request->check7;
        $evaluations->ventes_persuasive_PWS                = $request->check8;
        $evaluations->visite_rdv_strutures                 = $request->check9;
        $evaluations->rôles_convenus                       = $request->check10;
        $evaluations->Exemples                             = $request->check11;
        $evaluations->Intervention_de_coaching_de_feedback = $request->check12;
        $evaluations->note_rencontre_client                = $note_rencontre;

        // fin de journée
        $evaluations->discussion_de_coaching_fin_de_journée      = $request->check13;
        $evaluations->documentation_et_revues              = $request->check14;
        $evaluations->note_fin_de_journee                  = $note_finj;

        // discussion de coaching commerciale
        $evaluations->resultat  = $request->resultat;
        $evaluations->tour_1  = $request->tour_1;
        $evaluations->tour_2  = $request->tour_2;
        $evaluations->conditions  = $request->condition;
        $evaluations->resume  = $request->resume;
        $evaluations->note_totale  = $note_totale;
        $save = $evaluations->save();



        if ($save) {
            return back()->with('success', 'Evaluation créer avec succès');
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
        EvaluationSuperviseur::destroy($id);
        return redirect()->route('evaluations_superviseurs.show')->with('warning', 'SUCCESS, suppression en cours...');
    }
}