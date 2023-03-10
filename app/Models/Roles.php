<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Roles extends Model
{
    use HasFactory;

    protected $fillable=
    [
        'id',
        'nom',
        
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}