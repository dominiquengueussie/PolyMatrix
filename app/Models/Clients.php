<?php

namespace App\Models;

use App\Models\User;
use App\Models\Agence;
use App\Models\Activite;
use App\Models\Categorie;
use App\Models\Objectifs;
use App\Models\TypeClient;
use App\Models\ZoneCommerciale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Clients extends Model
{
    use HasFactory;
    protected $fillable=
    [
        'id',
        'designation',
        'pays',
        'ville',
        'quartier',
        'typologie',
        'reseau',
        'statut',
        'longitude',
        'latitude',
        'user_id',
        'agence_id',
        'zone_commerciale_id',
        'categorie_id',
        'type_client_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function agence(){
        return $this->belongsTo(Agence::class);
    }
    public function zone_commerciale(){
        return $this->belongsTo(ZoneCommerciale::class);
    }
    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }
    public function type_client(){
        return $this->belongsTo(TypeClient::class);
    }
    public function activites(){
        return $this->hasMany(Activite::class);
    }
    public function objectifs(){
        return $this->hasMany(Objectifs::class);
    }
}
