<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use App\Models\EvaluationCommercial;
use App\Models\EvaluationSuperviseur;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;

class EvaluationSuperviseurExport implements FromCollection, WithHeadings, WithMapping,WithStrictNullComparison

{

  /**
   * @return \Illuminate\Support\Collection
   */
  public function collection()
  {
    return EvaluationSuperviseur::all();  
  }
  

  public function headings(): array
  {
    return [
      
      'nom',
      'nom manager',
      'preparation',
      'environnement et style',
      'resultat de lapprentissage',
      'point sur les outils',
      'note debut de journee',
      'discussion de coaching',
      'objectif smart client par visite',
      'competences cles PWS',
      'ventes persuasive PWS',
      'visite rdv strutures',
      'rôles convenus',
      'exemples',
      'note rencontre client',
      'Intervention de coaching de feedback',
      'discussion_de_coaching_fin_de_journée',
      'note fin de journee',
      'documentation et revues',
      'resultat',
      'tour 1',
      'tour 2',
      'conditions',
      'resume',
      'note totale',

    ];
  }

  public function map($row): array
  {

    return [
      //$row->id,
      $row->name_user,  
      $row->nom_manager,
      $row->preparation,
      $row->environnement_et_style,
      $row->resultat_de_lapprentissage,
      $row->point_sur_les_outils,
      $row->note_debut_de_journee,
      $row->discussion_de_coaching,
      $row->objectif_smart_client_par_visite,
      $row->competences_cles_PWS,
      $row->ventes_persuasive_PWS,
      $row->visite_rdv_strutures,
      $row->rôles_convenus,
      $row->exemples,
      $row->note_rencontre_client,
      $row->Intervention_de_coaching_de_feedback,
      $row->discussion_de_coaching_fin_de_journée,
      $row->note_fin_de_journee,
      $row->documentation_et_revues,
      $row->resultat,
      $row->tour_1,
      $row->tour_2,
      $row->conditions,
      $row->resume,
      $row->note_totale,
    ];
  }
}