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
use  App\Services;
use Carbon\Carbon;
use DateTime;


class demandeController extends Controller
{

    public $currentPage=""; /// ici la variable pour setter la page courrante à afficher
    public $ifTransbordToDo =""; /// ici la variable pour detecer si l'user à selectionner le transbordement
    public $section=""; // la section ici pour identifier dans quelle partie du formulaire nous nosu trouvons pour faire le traitement
    public $myNewDemande ; // la variable qui retiendra la nouvelle demande créée
    public $idDemandeLoading="";
    public  $newNavireCreated = "";

    //Section de capture
    public $capture = [];
    public $updateCapture =[];
    public $tableCapture=[]; 
    public $indexCaptureToUpdate=null; 
    public $totalQteDebaq;
    public $totalAbord;

    function index(){
        $navireEnCours= Navire::all();

        $this->setCurrentPageView();
        return view('livewire.demandes.index',[
            'currentPage'=>$this->currentPage, 
            'idDemadne'=>$this->idDemandeLoading,
            'lesNavires'=>$navireEnCours,
        ]);
    }




    /******************************************************/
    /******************************************************/
    // la fonction-ci nous permettra de recuperer le navire necessaire pour la demande en cours de traitement //
    /******************************************************/
    /******************************************************/
    public function getNavieForDemandeFunct(request $request){
        
        $navireSelected= Navire::find($request->input('idNavireSelcted'));
        
        return response()->json([
            'succes' => "enregistré avec succes",
            'navireSelected' => $navireSelected,
        ], 203);

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
    // la fonction qui va ajouter le nouveau navire dans la base  //
    /******************************************************/
    /******************************************************/
    public function addNewNavire(request $request, int $demandeId){
        // ici je crée le nouveau navire avec tous les champs renseignés
        $nomNavire  = $request->input('nomNavire');
        $etatPavillonNavire = $request->input('etatPavillonNavire'); 
        $typeNavire = $request->input('typeNavire'); 
        $certifNavire = $request->input('certifNavire'); 
        $tiranNavire = $request->input('tiranNavire'); 
        $longNavire = $request->input('longNavire'); 
        $largNavire = $request->input('largNavire'); 
        $immaCertifNavire = $request->input('immaCertifNavire'); 
        $omi = $request->input('omi');
        $orgp = $request->input('orgp');

        $myNewNavireForDemandeLoading = Navire::create(
            [
                'Nom_Navire' => $nomNavire  ,
                'Etat_Pavillon' => $etatPavillonNavire ,
                'Type_Navire'=>  $typeNavire , 
                'Id_Certificat_Immat' =>  $certifNavire, 
                'Hull_Material'=> $tiranNavire, 
                'Dimension_Navire'=> $longNavire  , 
                'Length_Overall' => $largNavire , 
                'Id_Certificat_Immat' =>$immaCertifNavire , 
                'Omi' => $omi,
                'ORGP' =>  $orgp ,
                "societe_id"=> 3, 
            ]
        );

        // ici je mets à jour le damande avec le navire
        
        DB::table('demandes' )
        ->where('id', $demandeId)
        ->update([ 
            'navires_id' => $myNewNavireForDemandeLoading->id,
        ]);

        return $myNewNavireForDemandeLoading->id;

    }

    /******************************************************/
    /******************************************************/
    // la fonction qui permet de mettre à jour  un navire de la base de donnée lié a une damande   //
    /******************************************************/
    /******************************************************/
    public function updateNewNavire(Navire $navire, request $request ){

         $nomNavire  = $request->input('nomNavire');
        $etatPavillonNavire = $request->input('etatPavillonNavire'); 
        $typeNavire = $request->input('typeNavire'); 
        $certifNavire = $request->input('certifNavire'); 
        $tiranNavire = $request->input('tiranNavire'); 
        $longNavire = $request->input('longNavire'); 
        $largNavire = $request->input('largNavire'); 
        $immaCertifNavire = $request->input('immaCertifNavire'); 
        $omi = $request->input('omi');
        $orgp = $request->input('orgp');
       
        $navire->update([
            'Nom_Navire' => $nomNavire  ,
            'Etat_Pavillon' => $etatPavillonNavire ,
            'Type_Navire'=>  $typeNavire , 
            'Id_Certificat_Immat' =>  $certifNavire, 
            'Hull_Material'=> $tiranNavire, 
            'Dimension_Navire'=> $longNavire  , 
            'Length_Overall' => $largNavire , 
            'Id_Certificat_Immat' =>$immaCertifNavire , 
            'Omi' => $omi,
            'ORGP' =>  $orgp ,
       ]);

    }
   
    


    
    /******************************************************/
    /******************************************************/
    //  ici gère la section port Form section        //
    /******************************************************/
    /******************************************************/
    public function navireAndPortFunct(request $request){

        //ici je recupère le navire qui a été selectionné depuis le selector de navire( je verifie si oui ou non il a été selectionné)
        $navireSelected =  $request->input('navireSelected');

        // icije recupère la demande qui est en train de courrir dans le forumaire
        $demandeId =  $request->input('demandeId');

        // ici je vais deja recuperer la demande pour voir si elle un navire pre
        $myDemande = Demande::find($demandeId); 

        // le resultat censé être retourné à la fin de la fonction
        $res="";


        if($navireSelected!="selectNavire"){
            $myDemande ->update([ 
                'navires_id' => $navireSelected,
            ]);
        }



       

        // ici recuperer dejà les informations du form objet Port  arrivées de la vue grace aux requêtes Ajax 
        $objetAccesPort = $request->input('objetAccesPort');
        $minuteArriveEstim = $request->input('minuteArriveEstim');
        $heureArriveEstim = $request->input('heureArriveEstim');
        $dateArriveEstim = $request->input('dateArriveEstim');
        $accueilPort = $request->input('accueilPort');
        $dateLastEscale = $request->input('dateLastEscale');

        
        
        
       
        

        if($dateArriveEstim){

            $testDateOk = $this->checkDateArrivEstime("/",$dateArriveEstim);
            
            $res= response()->json([
                'serverDate' => $testDateOk,
            ], 203);
        }else{
            dd("je suis ici");
            // ici un tableau qui va enregistrer les data de la demande concernant le port 
            $data=[$objetAccesPort,$minuteArriveEstim,$dateArriveEstim, $accueilPort,$dateLastEscale];

            $this->updateDemande( $data);
            $res= response()->json([
                'succes' => "enregistré avec succes",
            ], 203);
        }


        return $res; 
        

    }


    // ici une fonction me permettant de controler la date d'arrivée estimée reseingée par l'user de sorte à verifier si cette date 
    // est valable et respecte les 3 jours d'envoi avant l'entre du navire au port
    public function checkDateArrivEstime($separator,$date){

        $resultCompareDate =false;

        $serverDate = Carbon::now(); // Utilisation de Carbon pour obtenir la date du serveur
        
        /// la fonction qui va spliter la date carborne passée en parametre
        $splitDateServer = $this->obtenirMoisJourAnnee($serverDate); 
        
        $moisServer = $splitDateServer['mois'];
        $dayServer= $splitDateServer['jour'];
        $yearServer= $splitDateServer['annee'];
        $newFormatDateServer = $yearServer.'-'.$moisServer.'-'.$dayServer; // ici je reformat la date du serveur a ma convenance 
        
        
        /// date donnée par le user qui sera prise pour etre comparée à la date du serveur
        $splitDateUser = explode($separator, $date); // Utilisez la fonction explode pour diviser le texte en fonction du séparateur

        $moisUser = $splitDateUser[0];
        $dayUser= $splitDateUser[1];
        $yearUser= $splitDateUser[2];
        $newFormatDateUser = $yearUser.'-'.$moisUser.'-'.$dayUser; // ici je reformat la date du l'user a ma convenance 

        $diffbetweenDate = $this->differenceEnJours($newFormatDateServer, $newFormatDateUser );

        if( $diffbetweenDate > 3){
            $resultCompareDate = true;
        }

        return $resultCompareDate;
       
    } 


    // ici la fonction qui me permet de faire la difference en jours à l'aide de deux dates données en parametre
    function differenceEnJours($date1, $date2) {
        // Créez deux objets DateTime à partir des dates fournies
        $dateObj1 = new DateTime($date1);
        $dateObj2 = new DateTime($date2);
    
        // Calculez la différence entre les deux dates
        $difference = $dateObj1->diff($dateObj2);
    
        // Obtenez le nombre de jours de différence
        $jours = $difference->days;
    
        return $jours;
    }
    


    // ici lla fonction qui recupère le jour, le mois et l'année depuis le serveur a partir de carborne
    function obtenirMoisJourAnnee($dateCarbon) {
        $mois = $dateCarbon->format('m');  // Obtient le mois au format 01-12
        $jour = $dateCarbon->format('d');  // Obtient le jour au format 01-31
        $annee = $dateCarbon->format('Y'); // Obtient l'année au format AAAA
    
        return [
            'mois' => $mois,
            'jour' => $jour,
            'annee' => $annee,
        ];
    }
    
   
    


    

    // ici la fonction qui eme permettra de mettre à jour dans la base la demande contenant les info envoyé renseignée par l'user
    public function updateDemande($var){

        DB::table('demandes' )
        ->where('id', $var["demandeId"])
        ->update([ 
            'Objet_Acces_Port' =>  $var['objetAccesPort'],
            'Date_escale' => $var ['dateLastEscale'],
            'Date_arrivee' =>  $var ['dateArriveEstim'],
            'Port' =>  $var['accueilPort'],
            'heure_arrivee' =>  $var['heureArriveEstim'].":". $var['minuteArriveEstim'],
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
                            <td class="tb-col-action"><a href="javascript:void(0);" data-id="'.$myCapture->id.'" onclick="myDelete(this)" class="link-cross me-sm-n1"><em class="icon ni ni-cross"></em></a></td>
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

        if(myContains($nameRequest, "presentDemande")){
           
            $this->currentPage = PRESENTDEMANDES;
    
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
