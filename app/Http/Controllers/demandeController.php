<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Capture;
use Exception;
use Illuminate\Support\Facades\DB;


class demandeController extends Controller
{

    public $currentPage=""; /// ici la variable pour setter la page courrante à afficher
    public $ifTransbordToDo =""; /// ici la variable pour detecer si l'user à selectionner le transbordement
    public $section=""; // la section ici pour identifier dans quelle partie du formulaire nous nosu trouvons pour faire le traitement
    public $myNewDemande ; // la variable qui retiendra la nouvelle demande créée
    public $idDemandeLoading="";

    //Section de capture
    public $capture = [];
    public $updateCapture =[];
    public $tableCapture=[]; 
    public $indexCaptureToUpdate=null; 
    public $totalQteDebaq;
    public $totalAbord;

    function index(){
        $this->setCurrentPageView();
        return view('livewire.demandes.index',['currentPage'=>$this->currentPage, 'idDemadne'=>$this->idDemandeLoading]);
    }



    /******************************************************/
    /******************************************************/
    // la fonction qui permet de créer une demande dans la base de données //
    /******************************************************/
    /******************************************************/

    public function createDemande(){
        
         $this->myNewDemande = Demande::create(
            [
                'Resultat' => '3',
                'Ref'=>"DPEP-".Str::upper(Str::random(3)),
                'users_id' => Auth()->user()->id,

            ]
        );

       return $this->idDemandeLoading = $this->myNewDemande->id;

    }

    
    /******************************************************/
    /******************************************************/
    //  ici gère la section navire et port section        //
    /******************************************************/
    /******************************************************/
    public function navireAndPortFunct(){

    }



        
    /******************************************************/
    /******************************************************/
    //        ici gère la section peche section        //
    /******************************************************/
    /******************************************************/
    public function PecheFunct(){
        
    }

        
    /******************************************************/
    /******************************************************/
    //        ici gère la section auto transb section        //
    /******************************************************/
    /******************************************************/
    public function TransbFunct(){
        
    }

        
    /******************************************************/
    /******************************************************/
    //        ici gère la section info transb section        //
    /******************************************************/
    /******************************************************/
    public function infoTransbFunct(){
       
        
    }


    /******************************************************/
    /******************************************************/
    //        ici gère la section capture section        //
    /******************************************************/
    /******************************************************/

    /**supprimer la capture */
    public function CaptureDeleteFunct(request $request){
        
        $idCapture = $request->input('captureId');
        $demandeId =  $request->input('demandeId');
        $msgIssue= "enregistré avec succs";

        //dd($idCapture);
        
        try {
            DB::table('captures')
            ->where('id',  $idCapture)
            ->where('demande_id',  $demandeId)
            ->delete();
        } catch (Exception $e) {
           
            $msgIssue= $e->getMessage();
        }

        return response()->json([
            'succes' => $msgIssue,
           
        ], 203);
       

    }


    /****create la capture dans la bd */
    public function CaptureFunct(request $request){
                    
        // ici recuperer dejà les informations arrivées de la vue grace aux requêtes Ajax 
            $espece = $request->input('espece');
            $produit = $request->input('produit');
            $zoneCapture = $request->input('zoneCapture');
            $qteBord = $request->input('qteBord');
            $qteDebarque = $request->input('qteDebarque');
            $demandeId =  $request->input('demandeId');
            

        // iserer directement dans une base de donnée chaque objet capture 
             $myCapture = Capture::create([
                'Produit' => $produit,
                'qte_a_bord' =>  $qteBord,
                'qte_debarque' => $qteDebarque,
                'zone_capture' => $zoneCapture,
                'espece' => $espece,
                'navires_id' =>	3,
                'demande_id' => $demandeId
            ]);


        // Retourner dans la vue lo'bjet mis en base de données de sorte à le voir s'afficher dans un tableau 
        
        $testCapture = ' <tr> 
                            <span class="text-white" >'.$myCapture->id.'</span>
                            <td class="tb-col-os">'.$espece.'</td>
                            <td class="tb-col-ip"><span class="sub-text">'.$produit.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$zoneCapture.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$qteBord.'</span></td>
                            <td class="tb-col-time"><span class="sub-text"><span class="d-none d-sm-inline-block">'.$qteDebarque.'</span></span></td>
                            <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                        </tr>';

        return response()->json([
            'succes' => "enregistré avec succes",
            'testCapture'=> $testCapture,
        ], 203);


    }



       
        
                    
                
        




    /******************************************************/
    /******************************************************/
    //others function to see if i want grab some info     //
    /******************************************************/
    /******************************************************/

    public function ajouterCaptureIntoCollectionCapture(request $request){
        
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "classe_id"=>"required"
        ]);

        $this->section="capture";
        // je  verifie ici assez rapidement les quantité renseignées
         if($this->capture["qteBord"]<$this->capture["qteDebarque"]){
            return false;
        }
        
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
           $this->idDemandeLoading = $this->createDemande();
           $this->currentPage = PAGENEWDEMANDE;
           
           
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
