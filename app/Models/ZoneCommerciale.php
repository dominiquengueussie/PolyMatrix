<?php

namespace App\Models;

use App\Models\User;
use App\Models\Clients;
use App\Models\Objectifs;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZoneCommerciale extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'id',
        'nom',
        'user_id',
    ];

    public function clients(){
        return $this->hasMany(Clients::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function objectifs(){
        return $this->hasMany(Objectifs::class);
    }
}
