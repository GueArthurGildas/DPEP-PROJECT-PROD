<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspection extends Model
{
    use HasFactory;

    public function Navire(){
        return  $this->belongsTo(Navire::class);
    }

    public function Demande(){
        return  $this->hasMany(Demande::class);
    }

    public function User(){
        return  $this->hasMany(User::class);
    }
}
