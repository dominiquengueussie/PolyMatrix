<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clients;
use App\Models\Categorie;
use App\Models\Objectifs;
use App\Models\TypeClient;
use App\Models\Interlocuteur;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Activite extends Model
{
    protected $fillable=
    [
        'id',
        'nom commercial',
        'poste commercial',
        'date',
        'heure_debut',
        'heure_fin',
        'objectifs',
        'check',
        'activite',
        'presentation',
        'duree',
        'activation(photo)',
        'raison sociale',
        'poste interlocuteur',
        'signature interlocuteur',
        'email interlocuteur',
        'telephone interlocuteur',
        'signature commercial',
        'besoin(SAV)',
        'longitude',
        'latitude',
        'conclusion',
        'interlocuteur_id',
        'client_id',
        'type_client_id',
        'user_id',
        'categorie_id',
    ];
    use HasFactory;

    public function interlocuteur(){
        return $this->belongsTo(Interlocuteur::class);
    }
    public function client(){
        return $this->belongsTo(Clients::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function type_client(){
        return $this->belongsTo(TypeClient::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function objectif(){
        return $this->belongsTo(Objectifs::class);
    }
}
