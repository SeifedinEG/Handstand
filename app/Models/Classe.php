<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;
    public function trainer(){
        return $this->belongsTo(Trainer::class);
    }

    public function inscription(){
        return $this->belongsTo(Inscription::class);
    }

   
}
