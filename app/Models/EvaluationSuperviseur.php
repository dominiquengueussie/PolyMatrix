<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class EvaluationSuperviseur extends Model
{
    protected $fillable=
    [
        'user_id',
        'id',
        'nom superviseur',
        'préparation',
        'environnement et style',
        'résultat de lapprentissage',
        'point sur les outils',
        'note début de journée',
        'discussion de coaching',
        'objectif smart client par visite',
        'compétences clés DWS',
        'ventes perçoisive DWS',
        'visite/rdv struturés',
        'rôles convenus',
        'Exemples',
        'note rencontre client',
        'Intervention de coaching/de feedback',
        'discussion de coaching',
        'note fin de journée',
        'documentation et revues',
        'résultat',
        'tour 1',
        'tour 2',
        'résumé',
        'note discussion coaching commercial',
        'note totale'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    use HasFactory;
}
