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

use Illuminate\Support\Facades\Mail;
use App\Mail\successDemandeSentMail;


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
       

       // $this->setCurrentPageView();
        
        return view('demande.index',[
            'currentPage'=>$this->currentPage, 
            'idDemadne'=>$this->idDemandeLoading,
        ]);
    }


    /******************************************************/
    /******************************************************/
    /*******Affiche le detail d'une demande selectionnée par l'user dans son interface */
    /******************************************************/
    /******************************************************/
    public function affOneDemandeDetail(Demande $demande){

        Carbon::setLocale("fr");

        // recuperer toutes les captures spécialement relatives à la demande cliquée
        $captures= DB::table('captures')->where("demande_id","=", $demande->id)->get();

        // recuperer toutes les Autorisations spécialement relatives à la demande cliquée
        $autoPeches= DB::table('autori_peches')->where("demande_id","=", $demande->id)->get();
       // dd($captures);
        return view('demande.detail-one-demande',
        [
            "demande"=>$demande,
            "captures"=>$captures,
            "autopeches" => $autoPeches,
        ]);
    }




    /******************************************************/
    /******************************************************/
    //        ici gère la section capture section        //
    /******************************************************/
    /******************************************************/

    /****create la capture dans la bd */
    public function CaptureFunct(request $request){
                    
        // ici recuperer dejà les informations arrivées de la vue grace aux requêtes Ajax 
            $espece = $request->input('espece');
            $produit = $request->input('produit');
            $zoneCapture = $request->input('zoneCapture');
            $qteBord = $request->input('qteBord');
            $qteDebarque = $request->input('qteDebarque');
            $demandeId =  session("IdDemandeRunning");
            

        // iserer directement dans une base de donnée chaque objet capture 
             $myCapture = Capture::create([
                'Produit' => $produit,
                'qte_a_bord' =>  $qteBord,
                'qte_debarque' => $qteDebarque,
                'zone_capture' => $zoneCapture,
                'espece' => $espece,
                'navires_id' =>	session("step1")["navire-selected"],
                'demande_id' => $demandeId 
            ]);



        $testCapture ='
       
<div class="content-capture-added">
   <span class="text-white" >'.$myCapture->id.'</span>
   <div class="ml-2 mr-2" id="testDelete">
      <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
         <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left ml-3 mr-3" style="position: relative;">
         </div>
      </div>
   </div>
   <div class="justify-end">
      <a href="javascript:void(0);" data-id="'.$myCapture->id.'"onclick="myDelete(this)" class="btn btn-l btn-white btn-dim btn-outline-dark text-danger">[X]</a>
   </div>
   <div class="nk-kycfm">
      <div class="row g-4 mb-3">
         <div class="col-md-6">
            <div class="form-group">
               <label class="form-label" for="full-name">Espèce  <span class="text-danger"></label>
               <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="'.$espece.'" disabled>
               </div>
            </div>
         </div>
         <!-- .col -->
         <div class="col-md-6">
            <div class="form-group">
               <label class="form-label" for="pay-amount">Qté à Bord  <span class="text-danger"></label>
               <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="'. $qteBord.'"   disabled>
               </div>
            </div>
         </div>
         <!-- .col -->
      </div>
      <!-- .row -->
      <div class="row g-4 mb-3">
         <div class="col-md-6">
            <div class="form-group">
               <label class="form-label" for="phone-no">Zone de capture  <span class="text-danger"></label>
               <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="'.$zoneCapture .'"   disabled>
               </div>
            </div>
         </div>
         <!-- .col -->
         <div class="col-md-6">
            <div class="form-group">
               <label class="form-label" for="pay-amount">Qté à Débarquer  <span class="text-danger"></label>
               <div class="form-control-wrap">
                  <input type="number" class="form-control" placeholder="'. $qteDebarque.'"   disabled>
               </div>
            </div>
         </div>
         <!-- .col -->
      </div>
      <!-- .row -->
      <div class="row g-4">
         <div class="form-group">
            <label class="form-label" for="email-address">Produit  <span class="text-danger"></label>
            <div class="form-control-wrap">
               <input type="number" class="form-control" placeholder="'. $produit.'"   disabled>
            </div>
         </div>
      </div>
      <!-- .row -->
   </div>
   <hr>
</div>


     ';

        return response()->json([
            'succes' => "enregistré avec succes",
            'testCapture'=> $testCapture,
        ], 203);


    }

    //***cette fonction permettra à jour l'id du navire au cas ou l'user change le navire durant sa promenade dans le logiciel */
    public function updateIdNavireForAllCapture(){

        $lesCapturesToUpdate= DB::table('Captures')->where("demande_id","=", session("IdDemandeRunning"))->get();
        
        foreach($lesCapturesToUpdate as $capture){

            Capture::find($capture->id)        
            ->update(['navires_id' =>session("step1")["navire-selected"]]);
        }

    }



    //***cette fonction permettra à jour les autorisatin de peche au cas ou l'user change le navire durant sa promenade dans le logiciel */
    public function updateIdNavireForAllAutoPeche(){

        $lesAutoPechToUpdate= DB::table('autori_peches')->where("demande_id","=", session("IdDemandeRunning"))->get();

        foreach($lesAutoPechToUpdate as $autoPeche){

            Autori_peche::find($autoPeche->id)        
            ->update(['navires_id' =>session("step1")["navire-selected"]]);

        }

    }



    /**supprimer la capture */
    public function CaptureDeleteFunct(request $request){
       
        $idCapture = $request->input('captureId');
        $demandeId =   session("IdDemandeRunning");
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


    

    /******************************************************/
    /******************************************************/
    //affiche la page de presentation des etapes de la demande//
    /******************************************************/
    /******************************************************/
    
    function affpresentDemande(){
    
        return view("demande.present-demande");

    }


    
    /******************************************************/
    /******************************************************/
    // affiche la page relative à la première section de la demande qui concerne le navire selectionné
    /******************************************************/
    /******************************************************/
    
    function affNavireForDemande(request $request){
       
        $navireStep1="";
        //dd($request->input("idNavireStep1"));
        if($request->input("idNavireStep1")){
            
            $navireStep1= Navire::find($request->input('idNavireStep1'));
        }

        


        if($request->input("test")){
            //dd("je suis la inh");
            //$this->createDemande();
        }
        
        $lesNavires= Navire::all();

        return view("demande.step-demande.step1",[
            'lesNavires'=>$lesNavires,
            'navireStep1'=>$navireStep1,
        ]);
    }



  
    /******************************************************/
    /******************************************************/
    // la fonction-ci nous permettra de recuperer le navire necessaire pour la demande en cours de traitement //
    /******************************************************/
    /******************************************************/
    public function getNavieForDemandeFunct(request $request){

      
      $navireSelected= Navire::find($request->input('idNavireSelcted'));

      session(["navireSelectedData"=> $navireSelected]);

        
      return response()->json([
            'succes' => "enregistré avec succes",
            'navireSelected' => $navireSelected,
       ], 203);

    }


    /******************************************************/
    /******************************************************/
    // la fonction-ci permet de traiter les données envoyé depuis le formulaire step-1//
    /******************************************************/
    /******************************************************/

    public function traitStep1(Request $request ){

        
        $request->validate([
            "navire-selected" => "required",
            "portEscalEnvisage" => "required",
            "dateLastEscale" => "required",
            //"testValue" => "required",
            "PortDernEscal" => "required",
            "dateArriveEstim" => "required",
            "heureArriveEstim" => "required",
            "minuteArriveEstim" => "required",
            "objetAccesPort" => "required"
        ]);


        $step1= $request->all();

        if(!session()->has("step1")){
            session(['step1' => $step1]);
            $this->createDemande();
        }else{
            session(['step1' => $step1]);
            //dd(session("step1"));
            $this->updateDemande();
        }

    
        //dd(session("step1")["navire-selected"]);

        $this->updateIdNavireForAllCapture();

        $this->updateIdNavireForAllAutoPeche();

        // return redirect()->route('home.demandes.caputredemande.index',["checkhascaptures"=>true]);
        return redirect()->route('home.demandes.caputredemande.index',["checkhascaptures"=>1]);

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
               'Objet_Acces_Port'=> session("step1")["objetAccesPort"],
               'Date_escale'=>session("step1")["dateLastEscale"],
               'Port_Dern_Escal'=>session("step1")["PortDernEscal"],
               'Port_Escale_Envisag'=>session("step1")["portEscalEnvisage"],
               'heure_arrivee'=>session("step1")["heureArriveEstim"],
               'Date_arrivee'=>session("step1")["dateArriveEstim"],
               'navires_id'=>session('step1')["navire-selected"]
           ]
       );

       session(['IdDemandeRunning' => $this->myNewDemande->id]);
       session(['demande' => $this->myNewDemande]);
      
   }


   /******************************************************/
   /******************************************************/
   // la fonction qui permet de mettre à jour une demande dans la base de données //
   /******************************************************/
   /******************************************************/
   public function updateDemande(){

     

       session("demande")->update(
           [
               'Resultat' => '38',
               'Ref'=>"DPEP-".Str::upper(Str::random(3)),
               'users_id' => Auth()->user()->id,
               'Objet_Acces_Port'=> session("step1")["objetAccesPort"],
               'Date_escale'=>session("step1")["dateLastEscale"],
               'Port_Dern_Escal'=>session("step1")["PortDernEscal"],
               'Port_Escale_Envisag'=>session("step1")["portEscalEnvisage"],
               'heure_arrivee'=>session("step1")["heureArriveEstim"],
               'Date_arrivee'=>session("step1")["dateArriveEstim"],
               'navires_id'=>session('step1')["navire-selected"]
           ]
       );
   }





    /******************************************************/
    /******************************************************/
    //  //affiche la page de step-2  de la demande//
    /******************************************************/
    /******************************************************/
    // cette fonction se charge juste d'afficher la page du step-2
    public function affCaptuDemande(Request $request){

        $lesCaptures="";
        $nbCaptures=0;

        if($request->input("checkhascaptures")){
            $lesCaptures =DB::table('Captures')->where("demande_id","like",session("IdDemandeRunning"))->get(); // ici je ramene toutes les captures en rapport avec la demande
            $nbCaptures = DB::table('Captures')->where('demande_id', 'like', session('IdDemandeRunning'))->count(); // ici je calcul le nombre de captures 
        } 

        //dd(session("IdDemandeRunning"));

        return view("demande.step-demande.step2",[
            'lesCaptures'=>$lesCaptures,
            'nbCaptures'=>$nbCaptures,
        ]);  // 
    }



    // la fonction chargée de traiter la les information de la vue du step-2
    public function traitStep2(){

        return redirect()->route('home.demandes.autopechedemande.index',['checkhascautopeche'=>1]);

    }

  



    /******************************************************/
    /******************************************************/
    //  //affiche la page de step-3  de la demande//
    /******************************************************/
    /******************************************************/
    public function affAutoPecheDemande(Request $request ){

        $lesAutoPeche="";

        if($request->input("checkhascautopeche")){
            $lesAutoPeche =DB::table('autori_peches')->where("demande_id","=", session("IdDemandeRunning"))->get();
        }

        return view("demande.step-demande.step3",[
            'lesAutoPeches'=>$lesAutoPeche,
        ]);  //
    }



    /******************************************************/
    /******************************************************/
    //**supprimer l'auto peche depuis la base de données */
    /******************************************************/
    /******************************************************/
    
    public function PecheDeleteFunct(request $request){
        
        $idPeche = $request->input('pecheId');
        $demandeId =  session("IdDemandeRunning");
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


    /******************************************************/
    /******************************************************/
     // ici inserer l'auto peche dans la base de donnée
    /******************************************************/
    /******************************************************/
   
    public function PecheFunct(request $request){

        
        // ici recuperer dejà les informations arrivées de la vue grace aux requêtes Ajax 
        $Identificateur = $request->input('Identificateur');
        $devlivrePar = $request->input('devlivrePar');
        $dateEmission = $this->convertDateFormat( $request->input('dateEmission'));
        $dateExpiration =  $this->convertDateFormat ($request->input('dateExpiration'));
        $zondPeche = $request->input('zondPeche');
        $especeForPeche = $request->input('especeForPeche');
        $engin = $request->input('engin');
        $demandeId = session("IdDemandeRunning");

        

        // iserer directement dans une base de donnée chaque objet 
            $myPeche = Autori_peche::create([
                'identif_auto_peche' => $Identificateur,
                'Deliv_Par' =>  $devlivrePar,
                'Date_Stat_Activities' => $dateEmission,
                'Date_end_Activities' => $dateExpiration,
                'Zone_peche' => $zondPeche,
                'espece' => $especeForPeche,
                'engin' => $engin,
                'navires_id' => session("step1")["navire-selected"]	,
                'demande_id' => $demandeId
            ]);

            


            // Retourner dans la vue l'objet mis en base de données de sorte à le voir s'afficher dans un tableau 
            
            $testPeche = '

            <div class=" row g-4 mb-3  content-autopeche-added">
                    
            <div class="ml-2 mr-2" id="testDelete">
            <div class="no-passport-details clearfix" style="border-bottom: 3px solid green; margin-top: 15px; margin-bottom: 10px;">
                <div class="col-md-1 col-sm-1 col-xs-2 no-padding-left ml-3 mr-3" style="position: relative;">
                </div>
            </div>
        </div>
        <div class="justify-end">
            <a href="javascript:void(0);" data-id="'.$myPeche->id.'"onclick="myDelete(this)" class="btn btn-l btn-white btn-dim btn-outline-dark text-danger">[X]</a>
        </div>
        <div class="col-lg-6">
           <div class="form-group">
              <label class="form-label" for="full-name">Identificateur <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                 <input type="text" class="form-control" id="Identificateur" placeholder="'.$Identificateur.'"   disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="email-address">Delivré Par <span class="text-danger"> </span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                 <input type="text" class="form-control" id="devlivrePar" placeholder="'.$devlivrePar.'"   disabled>
              </div>
           </div>
           <div class="row mb-3">
              <div class="col-6">
                 <div class="form-group">
                    <label class="form-label" for="pay-amount">Date Emission <span class="text-danger"></span> <strong class="text-danger"></strong></label>
                    <div class="form-control-wrap">
                       <div class="form-icon form-icon-right">
                          <em class="icon ni ni-calendar-alt"></em>
                       </div>
                       <input type="text" class="form-control date-picker" id="dateEmission" placeholder="'.$dateEmission.'"   disabled>
                    </div>
                 </div>
              </div>
              <div class="col-6">
                 <div class="form-group">
                    <label class="form-label" for="pay-amount">Date Expiration <span class="text-danger"></span> <strong class="text-danger"></strong></label>
                    <div class="form-control-wrap">
                       <div class="form-icon form-icon-right">
                          <em class="icon ni ni-calendar-alt"></em>
                       </div>
                       <input type="text" class="form-control date-picker" id="dateExpiration" placeholder="'.$dateExpiration.'"   disabled >
                    </div>
                 </div>
              </div>
           </div>
           
        </div>
        <div class="col-lg-6">
           <div class="form-group">
              <label class="form-label" for="email-address">Zone de pêche <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder="'.$zondPeche.'"   disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="phone-no">Espèce <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder="'.$especeForPeche.'"   disabled>
              </div>
           </div>
           <div class="form-group">
              <label class="form-label" for="phone-no">Engin <span class="text-danger"></span> <strong class="text-danger"></strong></label>
              <div class="form-control-wrap">
                <input type="number" class="form-control" placeholder="'.$engin.'"   disabled>
              </div>
           </div>
        </div>
            </div>
        

            ' ;


            return response()->json([
                'succes' => "enregistré avec succes",
                'testPeche'=> $testPeche,
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
    //  Fonction qui affiche la partie concernant l'uploader de fichier        //
    /******* ici la fonction qui permettra d'afficher la page de step-4 */
    /******************************************************/
    /******************************************************/

    
    public function affuploadFileDemande(){
        return view("demande.step-demande.step4");

        
    }


    public function traitStep4(){
        return redirect()->route('home.demandes.recapedemande.index');

    }




    /******************************************************/
    /******************************************************/
    //  Fonction qui traiterons les information validées depuis la page de recap demande       //
    /******************************************************/
    /******************************************************/
    public function traiteRecapDemande(Request $request){

        $data=Auth()->user();
        
        //dd($data['email']);

        // Mail::to($data["email"])->send(new successDemandeSentMail($data)); // l'envoi du pour l'instant  à l'user ibi des l'enregitrement dans l'application

        return redirect()->route('home');
        
    }


    /******************************************************/
    /******************************************************/
    //  Fonction qui affiche la partie concernant les recape de la demande       //
    /******************************************************/
    /******************************************************/

    public function affRecapDemande(){
        
        $Captures = DB::table('Captures')->where("demande_id","=", session("IdDemandeRunning"))->get(); //
        
        $AutoPeches= DB::table('autori_peches')->where("demande_id","=", session("IdDemandeRunning"))->get(); //
        
        return view("demande.recap-demande",[
            "Captures"=>$Captures,
            "AutoPeches"=>$AutoPeches,
        ]);
    }



    /******************************************************/
    /******************************************************/
    /// ici la fonction qui permet de verifier dans le contenu donné en paramettre s'il existe un element à l'interieur
    /******************************************************/
    /******************************************************/
    
    function myContains($container, $contenu){
        return Str::contains($container,$contenu);
    }


    
    /******************************************************/
    /******************************************************/
    //ici la fonction qui me ermet de setter des page à a fficher dans l'index de la demande
    /******************************************************/
    /******************************************************/

    public function setCurrentPageView()
    {
       $nameRequest= request()->route()->getName();

        
       // ici je set la page visible à la liste des demandes
       if(myContains($nameRequest, "listdemande")){
           $this->currentPage = PAGELISTDEMANDE;
       }

       // ici je set la page visible à une nouvelle des demandes
       if(myContains($nameRequest, "newdemande")){
        $this->currentPage = PAGENEWDEMANDE;
        }

       // ici je set la page visible à la presentation d'une demande
        if(myContains($nameRequest, "presentdemande")){
            $this->currentPage = PRESENTDEMANDES;
        }

        // ici je set la page visible à la presentation d'une demande
        if(myContains($nameRequest, "naviredemande")){
            $this->currentPage = PAGENAVIREDEMANDE;
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

     /**************************************************************************************************************************************************************/
    /**************************************************************************************************************************************************************/
    //Toutes les fonctions qui traiterons la logique quant aux informatiions des requêtes venant des agents 
    /**************************************************************************************************************************************************************/
    /**************************************************************************************************************************************************************/ 



    /******************************************************/
    /******************************************************/
    //ici la fonction qui affichera la liste des demandes  venant de la page des agents  
    /******************************************************/
    /******************************************************/

   public function  affListeDemandes() {
        $demandes = Demande::orderby("id","desc")->paginate(10);
        return view("demande.agent-section.list-demande",[
            "demandes"=>$demandes,
        ]);
   }

   public function affAccueilAgent(){
    return view("home-agent");
   }

   public function affdetailDemandeAgent(){
    return view("agent.agent-detail-demande");
   }




}
