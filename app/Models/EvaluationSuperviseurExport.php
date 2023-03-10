<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvaluationSuperviseurExport extends Model
{
    protected $fillable =
    [
        'id',
        'evaluation_superviseur_id',
        'nom_manager',
        'preparation',
        'environnement_et_style',
        'resultat_de_lapprentissage',
        'point_sur_les_outils',
        'note_debut_de_journee',
        'discussion_de_coaching',
        'objectif_smart_client_par_visite',
        'competences_cles_PWS',
        'ventes_persuasive_PWS',
        'visite_rdv_strutures',
        'rôles_convenus',
        'exemples',
        'note_rencontre_client',
        'intervention_de_coaching_de_feedback',
        'discussion_de_coaching',
        'note_fin_de_journée',
        'documentation_et_revues',
        'resultat',
        'tour_1',
        'tour_2',
        'resume',
        'note_discussion_coaching_commercial',
        'note_totale'
    ];

    public function user()
    {
        return $this->belongsTo(EvaluationSuperviseur::class);
    }
    use HasFactory;
}