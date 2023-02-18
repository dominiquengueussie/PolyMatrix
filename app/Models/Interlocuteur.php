<?php

namespace App\Models;

use App\Models\Activite;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Interlocuteur extends Model
{
    use HasFactory;
    protected $fillable =
    [
        'id',
        'nom',
        'email',
        'telephone',
        'poste',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function activites(){
        return $this->hasMany(Activite::class);
    }
}
