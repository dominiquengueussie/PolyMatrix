<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clients;
use App\Models\Activite;
use App\Models\Categorie;
use App\Models\TypeClient;
use App\Models\ZoneCommerciale;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Objectifs extends Model
{
    protected $fillable=
    [
        'id',
        'nom_objectif',
        'description',
        'quartier',
        'date',
        'heure',
        'client_id',
        'categorie_id',
        'type_client_id',
        'user_id',
        'zone_commerciale_id',
    ];
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class);
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
    public function zone_commerciale(){
        return $this->belongsTo(ZoneCommerciale::class);
    }
    public function activites(){
        return $this->hasMany(Activite::class);
    }
}