<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class demandeController extends Controller
{

    public $currentPage=""; /// ici la variable pour setter la page courrante à afficher
    public $ifTransbordToDo =""; /// ici la variable pour detecer si l'user à selectionner le transbordement

    function index(){
        $this->setCurrentPageView();
        return view('livewire.demandes.index',['currentPage'=>$this->currentPage]);
    }


    public function checkIfTransbordSelection(Request $request){
            if($request->ajax()){
                dd($request->all());
                // if(myContains($test, "trans")){
                //     dd("je suis ici");
                //    return response()->json([
                //     'succes' => "enregistré avec succes",
                //     ], 203); 
                // }else{
                //     return response()->json([
                //         'succes' => "enregistré avec ko",
                //     ], 203); 
                // };
            }

            return response()->json([
                        'succes' => "enregistré avec oo",
                    ], 203); 

            
    }

    function myContains($container, $contenu){
        return Str::contains($container,$contenu);
    }


    public function setCurrentPageView()
    {
       $nameRequest= request()->route()->getName();


       if(myContains($nameRequest, "list")){
           $this->currentPage = PAGELISTDEMANDE;
       }

       if(myContains($nameRequest, "new")){
           $this->currentPage = PAGENEWDEMANDE;
           // $this->setCurrentSousPageDemande();
       }

       if(myContains($nameRequest, "mesdemande")){
           $this->currentPage = PAGEMESDEMANDES;
       }

       if(myContains($nameRequest, "voirdemande")){
           $this->currentPage = PAGEVOIRDEMANDES;
       }

       if(myContains($nameRequest, "userdemande")){
           $this->currentPage = PAGEUSERDEMANDES;
       }   
       
       if(myContains($nameRequest, "demandedetail")){
           $this->currentPage = PAGEDEMANDEDETAIL;
       }  
   }
}
