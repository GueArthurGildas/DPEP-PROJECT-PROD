<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autorisation extends Model
{
    use HasFactory;

    public function Demande(){
        return  $this->belongsTo(Demande::class);
    }

    public function Navire(){
        return  $this->belongsTo(Navire::class);
    }

    public function Capture(){
        return  $this->hasMany(Capture::class);
    }
}
