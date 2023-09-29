
<?php

use Illuminate\Support\Str;
use App\Models\Demande;


//////////////////////////////////////
define("PAGELISTDEMANDE", "listDemande");
define("PAGENEWDEMANDE", "newDemande");
define("PAGEEDITDEMANDE", "editDemande");


/// LISTE PAR ORDRE DES DIFFERENTS FROMULAIRES
// 1-presenteDemande
// 2-navireDemande
// 3-portDemande
// 4-ProprietDemande
// 5-captureDemande
// 6-pecheDemande
// 7-transbDemande
// 8-infoTransbDemande
// 9-recapDemande


define("PAGEPRESENTDEMANDE", "presentDemande");
define("PAGENAVIREDEMANDE", "navireDemande");
define("PAGEPORTDEMANDE", "portDemande");
define("PAGEPROPRIOTDEMANDE", "ProprietDemande");
define("PAGECAPTUREDEMANDE", "captureDemande");
define("PAGEPECHEDEMANDE", "pecheDemande");
define("PAGETRANSBORDDEMANDE", "transbDemande");
define("PAGETINFORANSBORDDEMANDE", "infoTransbDemande");
define("PAGERECAPDEMANDE", "recapDemande");
define("PAGETUPLOADFILES", "uploadFiles");







define("PAGELOGIN", "login");
define("PAGEREGISTER", "register");

define("PAGELISTNAVIRE","listeNavire");
define("PAGENEHISTONAVIRE","histoNavire"); 
define("PAGEMESDEMANDES","mesdemandes"); 
define("PAGEVOIRDEMANDES","voirdemande"); 
define("PAGEUSERDEMANDES","userdemande"); 
define("PAGEDEMANDEDETAIL","demandedetail"); 



define("PAGELIST", "liste");
define("PAGECREATEFORM", "create");
define("PAGEEDITFORM", "edit");
define("DEFAULTPASSOWRD", "password");

///*****************  Les constantes @s*****************///
//les constantes pour me dire dans quelle page je me trouve
define("DashbordPage","dashbod");
define("DemandePage","demandepage");
define("UserPage","userpage");
define("NavirePage","navirepage");

/// Cosntantes Users
define("USERDEMANDELISTE","userdemandeliste");
define("USERPAGEACCUEIL","userpageaccueil");

///*****************  Les constantes @e*****************///



function userFullName(){
    return Auth()->user()->name;
}

function notifNbNewDemande(){
    // $titles = DB::table('users')->pluck('title');
    $var= Demande::all()->where('Resultat',"2")->count();
    if($var===0){
        return "0";
    }else{
        return $var;
    }
}

function userRole(){
    foreach(auth()->user()->roles as $role){
        return $role->nomRole."  --";
    }
  
}

function myContains($container, $contenu){
    return Str::contains($container,$contenu);
}

function setMenuToOpen($route){
    $nameRequest= request()->route()->getName();
    
    if(myContains($nameRequest,$route)){
        return "menu-open";
    }
    else{
        return "";
    }
}

function setSousMenuColorOnSelected($route){

    $nameRequest= request()->route()->getName();
    if(myContains($nameRequest,$route)){
        return  "background-color: #696969; color:orange"; //"background-color: #696969; color:#fff"
    }
    else{
        return ""; //
    }   
}


function setIconeSelected($route){

    $nameRequest= request()->route()->getName();
    if(myContains($nameRequest,$route)){
        
        return "fa fa-angle-right"; 
    }
    else{
        return ""; //
    }   
}

 function setBorderMenu($route){
    $nameRequest= request()->route()->getName();
    if(myContains($nameRequest,$route)){
        
        return "border border-primary"; 
    }
    else{
        return "border border-light";
    }
   
 }
// .nav-item.show .nav-link {
//     color: #495057;
//     background-color: #495057;

function setMenuActive($route){
    $nameRequest= request()->route()->getName();
    
    if(myContains($nameRequest,$route)){
        return "active text-left font-italic";
    }
    else{
        return "";
    }
}






