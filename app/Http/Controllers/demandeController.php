<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Demande;
use App\Models\Capture;
use App\Models\Navire;
use App\Models\Autori_peche;
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
        $navireEnCours= Navire::orderby("Nom_Navire","asc")->paginate(5);;

        $this->setCurrentPageView();
        return view('livewire.demandes.index',[
            'currentPage'=>$this->currentPage, 
            'idDemadne'=>$this->idDemandeLoading,
            'lesNavires'=>$navireEnCours,
        ]);
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
    // la fonction qui permet de créer une demande dans la base de données //
    /******************************************************/
    /******************************************************/


    
    /******************************************************/
    /******************************************************/
    //  ici gère la section navire  section        //
    /******************************************************/
    /******************************************************/
    public function navireAndPortFunct(request $request){

        // ici recuperer dejà les informations arrivées de la vue grace aux requêtes Ajax 
        $objetAccesPort = $request->input('objetAccesPort');
        $minuteArriveEstim = $request->input('minuteArriveEstim');
        $heureArriveEstim = $request->input('heureArriveEstim');
        $dateArriveEstim = $request->input('dateArriveEstim');
        $accueilPort = $request->input('accueilPort');
        $dateLastEscale = $request->input('dateLastEscale');
        $demandeId =  $request->input('demandeId');

        DB::table('demandes' )
        ->where('id', $demandeId)
        ->update([ 
            'Objet_Acces_Port' => $objetAccesPort,
            'Date_escale' => $dateLastEscale,
            'Date_arrivee' => $dateArriveEstim,
            'Port' => $accueilPort,
            'heure_arrivee' => $heureArriveEstim.":".$minuteArriveEstim,
        ]);

        return response()->json([
            'succes' => "enregistré avec succes",
        ], 203);

        // ici recuperer liées uniquement au Navire venues de la vue grace aux requêtes Ajax
        $nomNavire =  $request->input('nomNavire');  
        $etatPavillonNavire =  $request->input('etatPavillonNavire');  
        $typeNavire =  $request->input('typeNavire');  
        $certifNavire =  $request->input('certifNavire');  
        $tiranNavire =  $request->input('tiranNavire');  
        $longNavire =  $request->input('longNavire');
        $largNavire =  $request->input('largNavire'); 
        $immaCertifNavire =  $request->input('immaCertifNavire'); 
        $omi =  $request->input('omi'); 
        $orgp =  $request->input('orgp'); 
        $contactNavireForInfo =  $request->input('contactNavireForInfo'); 
        $proprioNavire =  $request->input('proprioNavire');
        $captaineName =  $request->input('captaineName');
        $captaineNationality =  $request->input('captaineNationality'); 

        DB::table('navires' )
        ->where('id', )
        ->where('id', $demandeId)
        ->update([   
           'Nom_Navire' => $nomNavire ,  
           'Etat_Pavillon' => $etatPavillonNavire  ,
           'Type_Navire' => $typeNavire,  
            //=>$certifNavire,  
            'Type_Navire' => $tiranNavire , 
            'Length_Overall' =>  $longNavire   ,
            'Dimension_Navire' => $largNavire  , 
            'Id_Certificat_Immat' => $immaCertifNavire,
            'Omi'  => $omi, 
            'ORGP' => $orgp, 
            // $contactNavireForInfo; 
            // $proprioNavire ;
            // $captaineName;
            // $captaineNationality;
        ]);


    }



        
    /******************************************************/
    /******************************************************/
    //        ici gère la section peche section        //
    /******************************************************/
    /******************************************************/

    //**supprimer l'auto peche depuis la base de données */
    public function PecheDeleteFunct(request $request){
        
        $idPeche = $request->input('pecheId');
        $demandeId =  $request->input('demandeId');
        $msgIssue= "supprimé avec succes";

       
        try {
            DB::table('autori_peches')
            ->where('id',  $idPeche)
            ->where('demande_id',  $demandeId)
            ->delete();
        } catch (Exception $e) {
           
            $msgIssue= $e->getMessage();
        }

        return response()->json([
            'succes' => $msgIssue,
           
        ], 203);
       

    }

    // ici inserer l'auto peche dans la base de donnée
    public function PecheFunct(request $request){

        
        // ici recuperer dejà les informations arrivées de la vue grace aux requêtes Ajax 
        $Identificateur = $request->input('Identificateur');
        $devlivrePar = $request->input('devlivrePar');
        $dateEmission = $this->convertDateFormat( $request->input('dateEmission'));
        $dateExpiration =  $this->convertDateFormat ($request->input('dateExpiration'));
        $zondPeche = $request->input('zondPeche');
        $especeForPeche = $request->input('especeForPeche');
        $engin = $request->input('engin');
        $demandeId =  $request->input('demandeId');
        

        // iserer directement dans une base de donnée chaque objet capture 
            $myPeche = Autori_peche::create([
                'Produit' => $Identificateur,
                'Deliv_Par' =>  $devlivrePar,
                'Date_Stat_Activities' => $dateEmission,
                'Date_end_Activities' => $dateExpiration,
                'Zone_peche' => $zondPeche,
                'espece' => $especeForPeche,
                'engin' => $engin,
                'navires_id' =>	3,
                'demande_id' => $demandeId
            ]);

            


            // Retourner dans la vue lo'bjet mis en base de données de sorte à le voir s'afficher dans un tableau 
            
            $testPeche ='<tr>
                        
                            <td class="tb-col-os">'.$devlivrePar.'<span class="sub-text text-white">'.$myPeche->id.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$devlivrePar.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$dateEmission.'/span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$dateExpiration.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$zondPeche.'</span></td>
                            <td class="tb-col-ip"><span class="sub-text">'.$especeForPeche.'</span></td>
                            <td class="tb-col-time"><span class="sub-text">'.$engin.'<span class="d-none d-sm-inline-block">'.$myPeche->id.'</span></span></td>
                            <td class="tb-col-action"><a href="javascript:void(0);" onclick="myDeleteAutoPeche(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
                               
                        </tr>';


            return response()->json([
                'succes' => "enregistré avec succes",
                'testPeche'=> $testPeche,
            ], 203);
                
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
    //  Fonction qui fait le Formatage de la date         //
    /******************************************************/
    //funcction pour convertir la date au format universal
    function convertDateFormat($date)
    {
        $date=(string) $date;
        $parts = explode('/', $date);

        $month= $parts[0] ?? null;
        $day = $parts[1] ?? null;
        $year = $parts[2] ?? null;
        $formattedDate = $year."-".$month."-".$day;
    
        return $formattedDate;
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

       if(myContains($nameRequest, "newdemande")){
           $this->createDemande();
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
