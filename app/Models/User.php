<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Roles;
use App\Models\Agence;
use App\Models\Article;
use App\Models\Clients;
use App\Models\Activite;
use App\Models\Categorie;
use App\Models\Objectifs;
use App\Models\TypeClient;
use App\Models\Interlocuteur;
use App\Models\ZoneCommerciale;
use Laravel\Sanctum\HasApiTokens;
use App\Models\EvaluationSuperviseur;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'role_id',
        'email',
        'poste',
        'telephone',
        'agence_id',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function agence(){
        return $this->belongsTo(Agence::class);
    }
    public function interlocuteurs(){
        return $this->hasMany(Interlocuteur::class);
    }
    public function categories(){
        return $this->hasMany(Categorie::class);
    }
    public function clients(){
        return $this->hasMany(Clients::class);
    }
    public function roles(){
        return $this->hasMany(Roles::class);
    }
    public function agences(){
        return $this->hasMany(Agence::class);
    }
    public function type_clients(){
        return $this->hasMany(TypeClient::class);
    }
    public function zone_commerciales(){
        return $this->hasMany(ZoneCommerciale::class);
    }
    public function activites(){
        return $this->hasMany(Activite::class);
    }
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function objectifs(){
        return $this->hasMany(Objectifs::class);
    }
    public function evaluation_superviseurs(){
        return $this->hasMany(EvaluationSuperviseur::class);
    }
}
