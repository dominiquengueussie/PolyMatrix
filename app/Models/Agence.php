<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'id',
        'nom',
        'created_by',
    ];

    public function users(){
        return $this->hasMany(User::class);
    }
    public function clients(){
        return $this->hasMany(Clients::class);
    }
}
