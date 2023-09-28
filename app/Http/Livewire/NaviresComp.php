<?php

namespace App\Http\Livewire;
use App\Models\Navire;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Services\FieldsRef;
use Illuminate\Support\Facades\DB;



use Livewire\Component;

class NaviresComp extends Component
{

    public $search="";
    public $currentPage="";

    public $navireForDetail=[];

    public $testNavire ;
   

    public function render()
    {
        
        
        $this->testNavire = FieldsRef::$testVal;
        Carbon::setLocale("fr");

        $this->setCurrentPageView();
        
        $searchCriteria = "%".$this->search."%";
        
        $data = [
            "navires" => Navire::where("Nom_Navire", "like", $searchCriteria)->get(),
            "navireForDetail"=>$this->navireForDetail,
        ];
               
        return view('livewire.navires.index',  $data )
                ->extends("layouts.master")
                ->section("content");
    }
    



        //ici attribue la bonne variable depuis la constante dans le helper afin de choisir la bonne page dans la demande
        public function setCurrentPageView()
        {
           $nameRequest= request()->route()->getName();
   
           if(myContains($nameRequest, "listenavire")){
               $this->currentPage = PAGELISTNAVIRE;
           }
   
           if(myContains($nameRequest, "histonavire")){
               $this->currentPage = PAGENEHISTONAVIRE;
           }
               
       }
   
   
       function myContains($container, $contenu){
           return Str::contains($container,$contenu);
       }
   

    // la fonction qui me permettra d'envoyer le navire selectionné vers la demande   
    public function goToSendDemane($idVessel){
      
         
         return redirect()->route('home.demandes.newdemande.index',['id' => $idVessel]);
    }


    // ici la fonction qui recupère le navire selectionné et puis montre une page qui décrit son detail
    public function goToDetailNavire($idVessel){
        sleep(2);
        // Perform any necessary operations or redirections here
        $this->navireForDetail = Navire::find($idVessel)->toArray();
        $this->currentPage = PAGENEHISTONAVIRE;

    }

    // ici la fonction activée quand on clique sur le bouton recherche
    public function search(){}


    public function goToInfoNavirePage(){
        $this->currentPage = PAGELISTNAVIRE;
    }


    
}
