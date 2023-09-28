<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Info_Transb extends Model
{
    use HasFactory;

    protected $fillable = [	"date_trasnbord","Nom","EtatPavillon","Lieu","Numero_ID","Produit","Espèce","Qté_capture_espèce","Zone_de_Capture",	"demande_id","navires_id"]; 

    public function demande(){
        return  $this->belongsTo(Demande::class);
    }
}
