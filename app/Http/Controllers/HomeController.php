<?php

namespace App\Http\Controllers;
use App\Models\Demande;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        $userRoleAuth=userRole();
        $nbDemdemandeUsers= Demande::where("users_id", "like", Auth()->user()->id)->count();
         

        // dd(userRole());
        $viewToShow = "home";


        if($userRoleAuth==="Agent" || $userRoleAuth==="Inspecteur" ){
            $viewToShow="home-agent";
        }

        //return redirect()->route('home.demandes.recapedemande.index');

    
        return view($viewToShow,[
            "userdemandes"=> Demande::where("users_id", "like", Auth()->user()->id)->orderby("id","desc")->paginate(4),
            "nbDemandeUser"=> $nbDemdemandeUsers,
        ]);

        
    }


}
