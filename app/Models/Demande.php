<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;


    protected $fillable = ['Objet_Acces_Port','Resultat','Ref','Date_escale','Port_Dern_Escal','Date_arrivee','users_id','navires_id','Port_Escale_Envisag','heure_arrivee']; 

    
    public function User(){
      return  $this->belongsTo(User::class,'users_id');
    }

    // public function inspection(){
    //     return  $this->belongsTo(Inspection::class);
    // }

    public function navire(){
        return  $this->belongsTo(Navire::class,'navires_id');
    }


    public function document(){
        return  $this->hasMany(Document::class);
    }

    public function capture(){
        return  $this->hasMany(Capture::class);
    }

    public function autoriPeche(){
        return  $this->hasMany(Autori_peche::class);
    }

    public function autoriTransbord(){
        return  $this->hasMany(Autori_transbord::class);
    }

    public function infoTransbord(){
        return  $this->hasMany(Info_Transb::class);
    }



}
