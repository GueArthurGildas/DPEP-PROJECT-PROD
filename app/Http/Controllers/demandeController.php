<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class demandeController extends Controller
{
    function index(){
        return view('myDashbord');
    }
}
