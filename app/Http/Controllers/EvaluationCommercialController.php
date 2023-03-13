<?php

namespace App\Http\Controllers;

use App\Exports\EvaluationCommercialExport;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EvaluationCommercial;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class EvaluationCommercialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('evaluation_commercial.index');
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
        // DE CHECK 1 A CHECK 6 CONCERNE LE PLANINF ET PREPARATION
       /*  $result =  $request->input('check1') + $request->input('check2') +
            $request->input('check3') + $request->input('check4') +
            $request->input('check5') + $request->input('check5'); */

        // Vérifier si la case à cocher est cochée
        $value1 = $request->filled('check1') ? 1 : 0;
        $value2 = $request->filled('check2') ? 1 : 0;
        $value3 = $request->filled('check3') ? 1 : 0;
        $value4 = $request->filled('check4') ? 1 : 0;
        $value5 = $request->filled('check5') ? 1 : 0;
        $value6 = $request->filled('check6') ? 1 : 0;
        $note_planing = $value1 + $value2 + $value3 + $value4 + $value5 + $value6;

        // DE CHECK 7 A CHECK 12 CONCERNE LE CHECK DES VECTEURS ET VENTES
        // Vérifier si la case à cocher est cochée
        $value7 = $request->filled('check7')   ? 1 : 0;
        $value8 = $request->filled('check8')   ? 1 : 0;
        $value9 = $request->filled('check9')   ? 1 : 0;
        $value10 = $request->filled('check10') ? 1 : 0;
        $value11 = $request->filled('check11') ? 1 : 0;
        $value12 = $request->filled('check12') ? 1 : 0;
        $note_vecteurs = $value7 + $value8 + $value9 + $value10 + $value11 + $value12;
        // DE CHECK 13 A CHECK 17 CONCERNE LE REVUE DES OBJECTIFS 
        // Vérifier si la case à cocher est cochée
        $value13 = $request->filled('check13') ? 1 : 0;
        $value14 = $request->filled('check14') ? 1 : 0;
        $value15 = $request->filled('check15') ? 1 : 0;
        $value16 = $request->filled('check16') ? 1 : 0;
        $value17 = $request->filled('check17') ? 1 : 0;
        $note_revues = $value13 + $value14 + $value15 + $value16 + $value17;
        
        // DE CHECK 18 A CHECK 26 CONCERNE LES PRESENTATIONS
        // Vérifier si la case à cocher est cochée
        $value18 = $request->filled('check18') ? 1 : 0;
        $value19 = $request->filled('check19') ? 1 : 0;
        $value20 = $request->filled('check20') ? 1 : 0;
        $value21 = $request->filled('check21') ? 1 : 0;
        $value22 = $request->filled('check22') ? 1 : 0;
        $value23 = $request->filled('check23') ? 1 : 0;
        $value24 = $request->filled('check24') ? 1 : 0;
        $value25 = $request->filled('check25') ? 1 : 0;
        $value26 = $request->filled('check26') ? 1 : 0;
        $note_presentation = $value18 + $value19 + $value20 + $value21 + $value22 + $value23 + $value24 + $value25 + $value26;
        
        // DE CHECK 27 A CHECK 29 CONCERNE LA CONCLUSION
        $value27 = $request->filled('check27') ? 1 : 0;
        $value28 = $request->filled('check28') ? 1 : 0;
        $value29 = $request->filled('check29') ? 1 : 0;
        $note_conclusion = $value27 + $value28 + $value29;
        
        // DE CHECK 30 A CHECK 36 CONCERNE L'ACTIVATION DES VECTEURS DE VENTE.
        $value30 = $request->filled('check30') ? 1 : 0;
        $value31 = $request->filled('check31') ? 1 : 0;
        $value32 = $request->filled('check32') ? 1 : 0;
        $value33 = $request->filled('check33') ? 1 : 0;
        $value34 = $request->filled('check34') ? 1 : 0;
        $value35 = $request->filled('check35') ? 1 : 0;
        $value36 = $request->filled('check36') ? 1 : 0;
        $note_activation = $value30 + $value31 + $value32 + $value33 + $value34 + $value35 + $value36;
        
        // DE CHECK 37 A CHECK 39 CONCERNE ADMINISTRATION.
        $value37 = $request->filled('check37') ? 1 : 0;
        $value38 = $request->filled('check38') ? 1 : 0;
        $value39 = $request->filled('check39') ? 1 : 0;
        $note_administration = $value37 + $value38 + $value39;
        
        // DE CHECK 40 A CHECK 44 CONCERNE Evaluation.
        $value40 = $request->filled('check40') ? 1 : 0;
        $value41 = $request->filled('check41') ? 1 : 0;
        $value42 = $request->filled('check42') ? 1 : 0;
        $value43 = $request->filled('check43') ? 1 : 0;
        $value44 = $request->filled('check44') ? 1 : 0;
        $note_evaluation = $value40 + $value41 + $value42 + $value43 + $value44;

        $evaluations = new EvaluationCommercial();
        //DE CHECK 1 A CHECK 6 CONCERNE LA PLANINF ET PREPARATION
        $evaluations->nom_commercial                       = $request->nom_commercial;
        $evaluations->nom_superviseur                      = Auth::user()->nom;
        $evaluations->agence                               = $request->agence;
        $evaluations->objectif_smart                       = $value1;
        $evaluations->tactique_execution                   = $value2;
        $evaluations->suivi_des_engagements                = $value3;
        $evaluations->presentation_de_vente                = $value4;
        $evaluations->outil_de_vente                       = $value5;
        $evaluations->journee_plan                         = $value6;
        $evaluations->note_planing_et_preparation          = $note_planing;

        // DE CHECK 7 A CHECK 12 CONCERNE LE CHECK DES VECTEURS ET VENTES
        $evaluations->qualite                        = $value7;
        $evaluations->distribution                   = $value8;
        $evaluations->visibilité                     = $value9;
        $evaluations->prices                         = $value10;
        $evaluations->promotion                      = $value11;
        $evaluations->persuasion                     = $value12;
        $evaluations->note_vecteur_de_vente          = $note_vecteurs;

        // DE CHECK 13 A CHECK 17 CONCERNE LE REVUE DES OBJECTIFS 
        $evaluations->revue1                                     = $value13;
        $evaluations->revue2                                     = $value14;
        $evaluations->revue3                                     = $value15;
        $evaluations->revue4                                     = $value16;
        $evaluations->revue5                                     = $value17;
        $evaluations->note_revue_des_objectifs                   = $note_revues;

        // DE CHECK 18 A CHECK 26 CONCERNE LES PRESENTATIONS
        $evaluations->presentation1  = $value18;
        $evaluations->presentation2  = $value19;
        $evaluations->presentation3  = $value20;
        $evaluations->presentation4  = $value21;
        $evaluations->presentation5  = $value22;
        $evaluations->presentation6  = $value23;
        $evaluations->presentation7  = $value24;
        $evaluations->presentation8  = $value25;
        $evaluations->presentation9  = $value26;
        $evaluations->note_presentation  = $note_presentation;

        // DE CHECK 27 A CHECK 29 CONCERNE LA CONCLUSION
        $evaluations->realiste            = $value27;
        $evaluations->juste_a_temps       = $value28;
        $evaluations->positive            = $value29;
        $evaluations->note_conclusion     = $note_conclusion;

        // DE CHECK 30 A CHECK 36 CONCERNE L'ACTIVATION DES VECTEURS DE VENTE.
        $evaluations->simple            = $value30;
        $evaluations->siting            = $value31;
        $evaluations->impact            = $value32;
        $evaluations->message           = $value33;
        $evaluations->price             = $value34;
        $evaluations->life              = $value35;
        $evaluations->ensure_safety     = $value36;
        $evaluations->note_activation   = $note_activation;

        // DE CHECK 37 A CHECK 39 CONCERNE ADMINISTRATION.
        $evaluations->administration1            = $value37;
        $evaluations->administration2            = $value38;
        $evaluations->administration3            = $value39;
        $evaluations->note_administration        = $note_administration;

        // DE CHECK 40 A CHECK 44 CONCERNE Evaluation.
        $evaluations->evaluation1            = $value40;
        $evaluations->evaluation2            = $value41;
        $evaluations->evaluation3            = $value42;
        $evaluations->evaluation4            = $value43;
        $evaluations->evaluation5            = $value44;
        $evaluations->note_evaluation    = $note_evaluation;

        //CHAMP DE TYPE TEXT DE FORMULAIRE
        $evaluations->point_fort                       = $request->point_fort;
        $evaluations->point_fort_a_ameliorer           = $request->point_ameliorer;
        $evaluations->commentaire_global            = $request->commentaire;

        //SIGNATURE COMMERCIAL
        $folderPath = public_path('signatures/');
        $signature1 = $request->signed1;

        if (!empty($signature1)) {
            $image_parts = explode(";base64,", $signature1);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $folderPath . uniqid() . '.' . $image_type;

            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            file_put_contents($file, $image_base64);
            $signature_data1 = $file;
        } else {
            $signature_data1 = null;
        }

        //return  dd($signature_data);
        // Insérer les données dans la base de données en utilisant $signature_data pour le champ signature_data



        //SIGNATURE SUPERVISEUR
        $folderPath = public_path('signatures/');
        $signature2 = $request->signed2;
        if (!empty($signature2)) {
            $image_parts = explode(";base64,", $signature2);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $folderPath . uniqid() . '.' . $image_type;

            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            file_put_contents($file, $image_base64);
            $signature_data2 = $file;
        } else {
            $signature_data2 = null;
        }

        //return  dd($signature_data);

        //SIGNATURE CLIENT
        $folderPath = public_path('signatures/');
        $signature3 = $request->signed3;
        if (!empty($signature3)) {
            $image_parts = explode(";base64,", $signature3);
            $image_type_aux = explode("image/", $image_parts[0]);
            $image_type = $image_type_aux[1];
            $image_base64 = base64_decode($image_parts[1]);
            $file = $folderPath . uniqid() . '.' . $image_type;

            if (!is_dir($folderPath)) {
                mkdir($folderPath, 0755, true);
            }

            file_put_contents($file, $image_base64);
            $signature_data3 = $file;
        } else {
            $signature_data3 = null;
        }

        $evaluations->signature_commercial = $signature_data1; 
        $evaluations->signature_superviseur = $signature_data2; 
        $evaluations->signature_ASM = $signature_data3; 
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
    public function showAll()
    {
        $evaluations = EvaluationCommercial::all();
        return view('evaluation_commercial.show', compact('evaluations'));
    }

     
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