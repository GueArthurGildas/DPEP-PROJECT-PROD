<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capitaine extends Model
{
    use HasFactory;

    protected $table = "capitaines";

    public function Navire(){
        return  $this->belongsTo(Navire::class);
    }
}
