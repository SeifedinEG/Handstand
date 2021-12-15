<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    use HasFactory;

    public function classes()
    {
        return $this->hasMany(Classe::class);
    }


    public function users()
    {
        return $this->hasMany(User::class);
    }

   
}
