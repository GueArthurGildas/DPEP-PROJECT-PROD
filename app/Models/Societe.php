<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Societe extends Model
{
    use HasFactory;


    protected $table = "societe";
    
    public function Navire(){
        return  $this->hasMany(Navire::class);
    }

    public function User(){
        return  $this->hasMany(User::class);
    }
}
