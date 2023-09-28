<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autori_transbord extends Model
{
    use HasFactory;


    protected $fillable = [		"Identificateur", "Deliv_Par",	"Date_Stat_Activities",	"Date_end_Activities",	"demande_id",	"navires_id"]; 


    public function demande(){
        return  $this->belongsTo(Demande::class);
    }
}
