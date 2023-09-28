<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capture extends Model
{
    use HasFactory;

    protected $fillable = ["navires_id","demandes_id","qte_a_bord","qte_debarque","Produit","espece","zone_capture"]; 


    public function navire(){
        return  $this->belongsTo(Navire::class);
    }

    public function demande(){
        return  $this->belongsTo(Demande::class);
    }

    public function Autorisation(){
        return  $this->belongsTo(Autorisation::class);
    }

}
