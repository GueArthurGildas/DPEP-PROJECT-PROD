<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navire extends Model
{
    use HasFactory;

    protected $fillable = ['Nom_Navire','Engin_Interne','Dimension_Navire','Num_IRCS','couleur_Navire','Etat_Pavillon','Port_Attache',
                           'Doc_Navire','Pays_originin_Navire','Pays_enregistre_Navire','Unique_Vessel_Identifier','Length_Overall','Net_Registered_Tonnage','Gross_Tonnage',
                           'Gross_Registered_Tonnage','Power_of_Main_Engine','Power_unit','Hull_Material','Fish_Hold_Capacity','Fish_Hold_Type','Net_tonnage',
                           '','Id_Certificat_Immat','Type_Navire','Omi','ORGP','Id_Extern','societe_id']; 


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
