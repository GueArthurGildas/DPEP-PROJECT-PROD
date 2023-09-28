<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navire extends Model
{
    use HasFactory;



    public function Inspection(){
        return  $this->hasMany(Inspection::class);
    }

    public function Historique(){
        return  $this->hasMany(Historique::class);
    }

    public function Societe(){
        return  $this->hasMany(Societe::class);
    }


    public function Autorisation(){
        return  $this->hasMany(Autorisation::class);
    }

    public function Capitaine(){
        return  $this->hasMany(Capitaine::class);
    }

    public function Capture(){
        return  $this->hasMany(Capture::class);
    }

    public function Demande(){
        return  $this->hasMany(Demande::class);
    }
}
