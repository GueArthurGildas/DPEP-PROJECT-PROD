<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autori_peche extends Model
{
    use HasFactory;

    protected $fillable = ["Date_demande",	"Zone_peche","espece","Libelle_Autorisation",	"Date_Deliv_Autorisation","Commentaire","Deliv_Par","Date_Stat_Activities","Date_end_Activities","demande_id","navires_id"	]; 


    public function demande(){
        return  $this->belongsTo(Demande::class);
    }
}
