<?php


namespace App\Http\Livewire;


use Livewire\Component;
use App\Models\Demande;
use Carbon\Carbon;
use Laravel\Ui\Presets\Bootstrap;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Services\FieldsRef;
use App\Services\Servapp;
use Illuminate\Http\Request;
use League\Flysystem\Adapter\NullAdapter;
use App\Models\Navire;
use DateTime;
use Illuminate\Support\Facades\DB;

class Demandes extends Component
{


    use  WithPagination;

    protected $paginationTheme = 'bootstrap';
    
    public $currentPage = "";

    public $formAutoriShown="peche";

    public $navireTypes = ""; 

    public $captureZones="";

    public $varToTest="";

    public $section="";

    //Section de capture
    public $capture = [];
    public $updateCapture =[];
    public $tableCapture=[]; 
    public $indexCaptureToUpdate=null; 
    public $totalQteDebaq;
    public $totalAbord;

    //Section de l'autorisation de peche
    public $autPeche =[];
    public $tableAutPeche=[];
    public $updateAutoPeche =[];
    public $indexAutPecheToUpdate=null;

  

    //Section de l'autorisation de Transbordement
    public $autTransb =[];
    public $tableAutTransb=[];
    public $updateAutTransb =[];
    public $indexAutTransbToUpdate=null;

    //Section de l'information de Transbordement
    public $infoTransb =[];
    public $tableInfoTransb=[];
    public $updateInfoTransb =[];
    public $indexInfoTransbToUpdate=null;


    public $portSection = [];
    public $autoPecheSection = [];
    public $autoTransbSection = [];
    public $infoTransbordSection = [];

    // ici l'id du navire que je dois afficher dans le formulaire et me permettra de faire la demande
    public $idNavire="";
    public $navireForDemande=[];
    public $namNavire="";
    public $isNavireSent= false;

 
    public $searchCriteriaStatut; // ici la variable qui recevra le statut selectionné pour le filtre 
    public $demandeFields=[];  // ici le tableau qui recevra les autres champs concernant la demande

    
    public $nbDemande=0; // ici la varibale qui initie le nombre de demande
    
    
    public $nbTotalDemandeUser=0; /// donne le nombre de demande total pour un utilisateur
    public $nbDemandeAccept =0;  /// donne le nombre de demande accepté pour un utilisateur
    public $nbDemandeRefuse = 0;////// donne le nombre de demande refusé pour un utilisateur
    public $nbDemandeEncours = 0; /// donne le nombre de demande en cours pour un utilisateur

    
    public $currentPagePaginate=0; // ici la varibale qui initie le numero de la page pour une demande

    public $searchDemandeByRef; // ici la variable qui recuperera la valeur de la recherche de la demande dans le tableau faite par ref
    public $search;  // ici la variable qui recuperera la valeur de la recherche de la demande dans le tableau faite par ref

    public $fieldForQuery="Resultat"; // ici la variable qui me permettra d'appliquer le filtre sur le champs voulu dans la table demande

    public $uneDemnade; // recupère l'objet d'une demande

    public $currentSousPageDemande=PAGEPRESENTDEMANDE;

    public $myNewDemande;
    public $idDemandeRunning;

    /// ici les flag pour afficher les champs qui serviront à uploader les documents des differents autorisation
    public $uploadAutoPeche ="";
    public $uploadAutoTransb ="";
    public $uploadAutoOthers ="";


    public $VariableTestForBinding = "okokTest";

   

    public function mount(){

        
        $this->nbDemande = DB::table('Demandes')->where("Resultat","<>","3")->count();
        $this->nbTotalDemandeUser=Demande::where("users_id", "like", Auth()->user()->id)->count();
        $this->nbDemandeAccept=Demande::where("users_id", "like", Auth()->user()->id)->where("Resultat","like","1")->count();
        $this->nbDemandeRefuse=Demande::where("users_id", "like", Auth()->user()->id)->where("Resultat","like","0")->count();
        $this->nbDemandeEncours=Demande::where("users_id", "like", Auth()->user()->id)->where("Resultat","like","2")->count();

        if(request()->query('initdemande')!=null){
             $this->createDemande();
        }

        // en cas de selection d'un navire ce bout de code sera executé
        if(request()->query('id')!=null){       
            $this->idNavire = request()->query('id');
            $this->navireForDemande = Navire::find($this->idNavire)->toArray();
            $this->isNavireSent=true;
            $this->currentSousPageDemande = PAGENAVIREDEMANDE;
            $this->createDemande();

        }

      //$this->navireTypes=FieldsRef::serchingB("")->all();
      $this->navireTypes=FieldsRef::getListCodeVessel();
      $this->captureZones= FieldsRef::getZoneCapture();

    }



    public function render()
    {

        //sleep(2);

        $searchCriteria = "%".$this->search."%";

        Carbon::setLocale("fr");
        $this->currentPagePaginate=Demande::where("Resultat","<>","3")->paginate(10)->currentPage();
        
        $nbElementDemande = (($this->nbDemande-($this->currentPagePaginate*10))<0)?$this->nbDemande:$this->currentPagePaginate*10;
        

        $this->setCurrentPageView();
          
        return view('livewire.demandes.index', [
               "demandes" => Demande::where($this->fieldForQuery, "like", $searchCriteria)
                                      ->where("Resultat","<>","3")->orderby("id","desc")->paginate(10),  ////"demandes" =>Demande::where("id", "like", $searchCriteria)->orderby("id","desc")->paginate(10),
                //"demandes" => Demande::orderby("id","desc")->paginate(10),  // Navire::where("Nom_Navire", "like", $searchCriteria)->get(),
                "userdemandes"=> Demande::where("users_id", "like", Auth()->user()->id)->orderby("id","desc")->paginate(6),
                "userdemandesaccept"=> Demande::where("users_id", "like", Auth()->user()->id)
                                          ->where("Resultat","like","1")->orderby("id","desc")->paginate(6),
                                          
                "userdemandesencours"=> Demande::where("users_id", "like", Auth()->user()->id)
                                                ->where("Resultat","like","2")->orderby("id","desc")->paginate(6),
                                                
                
                                          
                "currentNbPage" => $nbElementDemande,
                "nbDemandes"=>$this->nbDemande,
                "id"=>$this->idNavire,
                "navireSent"=>$this->navireForDemande,
                "isNavireSent"=> $this->isNavireSent,
                "currentSousPageDemande"=> $this->currentSousPageDemande,
                "VariableTestForBinding" =>$this->VariableTestForBinding,
         ])
                ->extends("layouts.master")
                ->section("content");
    }


    


    // une fonction qui genere des textes aleatoires afin de les utiliser dans code ref de la demande lors l'enregistrement dans la bd
    public function generateRandomString($length)
    {
        return bin2hex(random_bytes($length));
    }

    //******** télécharge les pdf  ici ********/
    // test du code generate pdf concernant le reçu
    public function printPdf(){
        return redirect()->route("dashbord");
    }

    // test du code generate pdf concernant le reçu
    public function printDemande(){
        return redirect()->route("dashbord-demande");
    }    



    // ici l'ensemble de mes fonctions pour faire la recherche dans le tableau
    public function search(){
        sleep(1);
        $this->fieldForQuery="id";
        $this->search=$this->search; 
    }


    public function UpdatedSearch(){
        $this->testSearch();
    }

    public function testSearch(){

        $this->fieldForQuery="Resultat";

        if($this->search=="Accepte"){
            $this->search ="1";
        }

        if($this->search=="Refuse"){
            $this->search ="0";
        }

        if($this->search=="EnCours"){
            $this->search ="2";
        }

    }


    // ici les règles pour la validation de chaque formulaire
    public function rules(){

        switch ($this->section) {

            case "demande":
                return [
                    'demandeFields.Date_escale' => 'required',
                    'demandeFields.Date_arrivee' => 'required',
                    'demandeFields.Port' => 'required',
                    'demandeFields.Objet_Acces_Port' => 'required',
                    'demandeFields.heure_arrivee' => 'required',
                ];
                break;

            case "navire":
                return [
                    'navireForDemande.Non_Navire' => 'required',
                    'navireForDemande.Num_IRCS' => 'required',
                    'navireForDemande.Etat_Pavillon' => 'required',
                    'navireForDemande.Type_Navire' => 'required',
                    'navireForDemande.Id_Certificat_Immat' => 'required',
                    'navireForDemande.Omi' => 'required',
                    'navireForDemande.Id_Extern' => 'required',
                    'navireForDemande.Length_Overall' => 'required',
                    'navireForDemande.Dimension_Navire' => 'required',
                    'navireForDemande.ORGP' => 'required',
                ];
                break;
            case "capture":
                return [
                    'capture.especes' => 'required',
                    'capture.produit' => 'required',
                    'capture.zoneCapture' => 'required',
                    'capture.qteBord' => 'required',
                    'capture.qteDebarque' => 'required', 
                ];
                break;
            case "autoPeche":
                return [
                    'autPeche.Identi' => 'required',
                    'autPeche.deliveryBy' => 'required',
                    'autPeche.dateBegin' => 'required',
                    'autPeche.dateClose' => 'required',
                    'autPeche.espece' => 'required',
                    'autPeche.zoneCapture' => 'required',
                    'autPeche.engin' => 'required',
                ];
                break;
            case "autoTransb":
                return [
                    'autTransb.Ident' => 'required',
                    'autTransb.deliveryBy' => 'required',
                    'autTransb.dateBegin' => 'required',
                    'autTransb.dateClose' => 'required',
                ];
                break;
            case "infoTransb":
                return [
                    'infoTransb.DateTransbor' => 'required',
                    'infoTransb.Nom' => 'required',
                    'infoTransb.Lieu' => 'required',
                    'infoTransb.EtatPavillon' => 'required',
                    'infoTransb.NumId' => 'required',
                    'infoTransb.Produit' => 'required',
                    'infoTransb.Espèce' => 'required',
                    'infoTransb.Qte' => 'required',
                    'infoTransb.ZoneCapture' => 'required',
                ];
                break;
            default:
                return [];
        }
    
    }

    // Ici la fonction pour se deconnecter




    // ici la fonction pour caluculer le nombre d"elements captures (poisson à bord y compris ce qui reste dans le navire)
    public function calQteEspeceCapture(){
        
        if( $this->tableCapture ){
                        
            $this->totalQteDebaq=0;
            $this->totalAbord=0;

            foreach($this->tableCapture as $i){
                $this->totalQteDebaq+= $i["capture"]["qteDebarque"];
                $this->totalAbord+= $i["capture"]["qteBord"];
            }
        }

    }






    public function changeStatResult($id){
        DB::table('demandes')
        ->where('id', $this->uneDemnade["id"])
        ->update(['Resultat' =>$id]);
        $this->dispatchBrowserEvent("showModalb", []);
    }


    /// ici la fonction qui me permettra de voir une demande individuellement pour ensuite la valider ou pas 
    public function goToVoirDemande($id){
        sleep(1.5);
        // Perform any necessary operations or redirections here
        $this->uneDemnade = Demande::find($id)->toArray();
        $this->currentPage = PAGEVOIRDEMANDES;
    }


    /// ici la fonction qui pointe vers la section presentation 
    public function goToSectionPresentation(){
        
        if(!$this->isNavireSent ){
            return redirect()->route("home.demandes.newdemande.index",["initdemande"=>Str::random(20)]);
        }
        
        //return redirect()->route("home.demandes.newdemande.index");

    }

    // teste
    public function goReturnToSectionPresentation(){
            Servapp::$statutSousPageNewDemande = PAGEPRESENTDEMANDE ;
            $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
        
    }

    /// ici la fonction qui pointe vers la section Navire
    public function goToSectionNavire(){
        if($this->currentSousPageDemande != PAGEPORTDEMANDE ){
            sleep("0.5");
        } 
        
        Servapp::$statutSousPageNewDemande = PAGENAVIREDEMANDE ;
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
        
    }

    /// ici la fonction qui pointe vers la section Port
    public function goToSectionPort(){
       
        Servapp::$statutSousPageNewDemande = PAGEPORTDEMANDE ;
        //   dd(Servapp::$statutSousPageNewDemande);
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
    }

    /// ici la fonction qui pointe vers la section Proprio du naviire
    public function goToSectionProprio(){

        Servapp::$statutSousPageNewDemande = PAGEPROPRIOTDEMANDE ;
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
    }

    /// ici la fonction qui pointe vers la section des information a renseigner sur les captures
    public function goToSectionCapture(){

        Servapp::$statutSousPageNewDemande = PAGECAPTUREDEMANDE ;
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
    }    

    /// ici la fonction qui pointe vers la section des information a renseigner sur les autorisations de peche
    public function goToSectionPeche(){

        Servapp::$statutSousPageNewDemande = PAGEPECHEDEMANDE ;
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
    }   

    /// ici la fonction qui pointe vers la section des information a renseigner sur les autorisations de transbordement
    public function goToSectionTransbord(){


       
        if($this->demandeFields){
            
            if($this->demandeFields['Objet_Acces_Port']== "Transbordement"){

                Servapp::$statutSousPageNewDemande = PAGETRANSBORDDEMANDE ;
                $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;  
            
            }else{
                if($this->currentSousPageDemande==PAGEPECHEDEMANDE){
                    $this->goToSectionUploadFile();
                }else if($this->currentSousPageDemande==PAGETUPLOADFILES){
                    $this->goToSectionPeche();
                }
               
            }
        }else {
            
            Servapp::$statutSousPageNewDemande = PAGETRANSBORDDEMANDE ;
            $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;  
        }

    }

    /// ici la fonction qui pointe vers la section des information a renseigner sur les informations sur les transbordement
    public function goToSectionInfoTransbord(){



            Servapp::$statutSousPageNewDemande = PAGETINFORANSBORDDEMANDE ;
            $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
            
       

    }

    /// ici la fonction qui pointe vers la section des information a renseigner sur les informations sur les transbordement
    public function goToSectionUploadFile(){
        Servapp::$statutSousPageNewDemande = PAGETUPLOADFILES ;
        $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande;
    }    

    /// ici la fonction qui pointe vers la section des information a renseigner sur les informations sur les recap
    public function goToSectionRecap(){
        $this->calQteEspeceCapture(); /// ici je calcule les totaux des captures à bord et à debarquer à chaque fois qu'on passe ici
        sleep(1);
        /// ici je me rassure qu'au moins un des champs dans le cours de remplissage de la demande à été renseigné
        if($this->demandeFields && $this->isNavireSent){
            Servapp::$statutSousPageNewDemande = PAGERECAPDEMANDE ;
            $this->currentSousPageDemande = Servapp::$statutSousPageNewDemande; 
        }else{
            $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
                "text" => "Remplissez correctement",
                "title" => "!!!!!!",
                "type" => "warning"
            ]]);
        }

       
    }    

    //ici la fonction qui me ramène sur la page d'acceuil de l'utilisateur
     public function goToUserDemandeHome(){

        if($this->currentSousPageDemande==PAGEPRESENTDEMANDE){
            $this->deleteDemande($this->myNewDemande["id"]);
        }
        return redirect()->route("home.demandes.userdemande.index");
     }

     // ici la fonction qui me balance vers le detail de la demande 
     public function goToDetailDEmande(){
       
        return redirect()->route("home.demandes.demandedetail.index");
     }


    //ici attribue la bonne variable depuis la constante dans le helper afin de choisir la bonne page dans la demande
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


    function myContains($container, $contenu){
        return Str::contains($container,$contenu);
    }


     /******************************************************/
    /******************************************************/
   // ici gère la section capture section
    public function addCaptureIntoCollection($code){
        $this->calQteEspeceCapture(); /// ic je calcule les quanités des captures à bord et à debarquer 
        $this->section="capture"; // je me cale sur les champs de vailidation des captures dans la structure conditionnelle case
        if($code=="add" ){
                
                //fonction pour ajouter dans la collection
                $validationAttributes = $this->validate();

                // je  verifie ici assez rapidement les quantité renseignées
                if($this->capture["qteBord"]<$this->capture["qteDebarque"]){
                    return false;
                }

                $this->tableCapture[] = $validationAttributes;
                $this->capture = [];

                $this->dispatchBrowserEvent("showModalb", []);
        };

        if($code=="del"  AND ($this->tableCapture)!=Null){

                //fonction pour supprimer de la collection
                array_pop($this->tableCapture);
                $this->dispatchBrowserEvent("showModalb", []);

        };

        if($code=="update"){
            // je  verifie ici assez rapidement les quantité renseignées
            if($this->updateCapture["capture"]["qteBord"]<$this->updateCapture["capture"]["qteDebarque"]){
                return false;
            }

            
            // ici j'attribue tranquillement capture upadte trouvé grace à l'index à la variable capture normale 
            $this->capture =$this->updateCapture["capture"];
            $validationAttributes = $this->validate(); // je verifie si tous les champs sont bien renseignés

            $this->tableCapture[$this->indexCaptureToUpdate]= $validationAttributes; // j'attribue la validation de la section capture correctement renseigné à mon tableaud de collection
            //$this->tableCapture[] = $validationAttributes;

            $this->updateCapture=[]; // je vide tout
            $this->capture=[]; // je vide tout
            $this->indexCaptureToUpdate=null;
            $this->dispatchBrowserEvent("showModalb", []);
        }

        // ici je vide les les deux tableau pour me rassurer de pourvoir les utiliser corectement le next fois
        if($code=="fresh" and  ($this->capture or $this->updateCapture)){
            $this->updateCapture =[];
            $this->capture = [];

        }

    }

    // ici la fonction pour editer la ligne de la capture selectionnée depuis la page blade
    public function editCapture( $index ){
        $this->section="capture";
        $this->indexCaptureToUpdate = $index;
        $this->updateCapture = $this->tableCapture[$index];
       
    }


    // ici je crée une fonction qui supprimera à partie de l'index recu de la page blade un element dans la collection capture
        public function removeCapture($indexCaptuToDelete){
            unset($this->tableCapture[$indexCaptuToDelete]);
            $this->tableCapture = array_values($this->tableCapture);
           // $this->dispatchBrowserEvent("showModalb", []);
        } 

    // ici la fonction qui me permet de caculer la périoide de l'autorisation
    public function calculateDiffDate($dateBegin, $dateEnd){
        $date1 = Carbon::createFromFormat('d/m/Y', $dateBegin);
        $date2 = Carbon::createFromFormat('d/m/Y', $dateEnd);

        $diff = $date1->diffInDays($date2); // Change this to the desired interval
        if($diff<0){
            return false;
        }

    }


        /******************************************************/
        /******************************************************/
       // ici gère la section Autorisation de peche 
       
       public function addAutoPeche($code){
        
        $this->section="autoPeche"; // dans la validation dans le rule se positionner sur la section autoPeche
       
        // ici quand l'user veut entrer ajouter une autorisation de peche dans la collection depuis la vue
        if($code=="add"){


                //fonction pour ajouter dans la collection
                $validationAttributes = $this->validate();
                
                //$this->calculateDiffDate($this->autPeche["dateBegin"],$this->autPeche["dateClose"]);

                $this->tableAutPeche[] = $validationAttributes;
                $this-> autPeche =[];
               
                $this->dispatchBrowserEvent("showModalb", []);
        };

        if($code=="del" AND ($this->tableAutPeche)!=Null){
                
                //fonction pour supprimer dans la collection
                array_pop($this->tableAutPeche);
                //$this->dispatchBrowserEvent("showModalb", []);

        };

        if($code=="fresh" and  ($this->autPecheor or $this->updateAutoPeche)){
            $this->autPeche = [];
            $this->updateAutoPeche=[];
            $this->dispatchBrowserEvent("showModalb", []);
            
        }

        if($code=="update"){

            // ici j'attribue tranquillement capture upadte trouvé grace à l'index à la variable capture normale 
            $this->autPeche =$this->updateAutoPeche["autPeche"];
            $validationAttributes = $this->validate(); // je verifie si tous les champs sont bien renseignés

            $this->tableAutPeche[$this->indexAutPecheToUpdate]= $validationAttributes; // j'attribue la validation de la section capture correctement renseigné à mon tableaud de collection
            //$this->tableCapture[] = $validationAttributes;
            
            $this->updateAutoPeche=[];
            $this->autPeche=[];
            $this->indexAutPecheToUpdate=null;
            $this->dispatchBrowserEvent("showModalb", []);
        }
    }

    
    // ici la fonction pour editer la ligne de la Autorisation de peche selectionnée depuis la page blade
    public function editAutoPeche( $index ){
        $this->indexAutPecheToUpdate = $index;
        $this->updateAutoPeche = $this->tableAutPeche[$index];
        
    }

    // ici je crée une fonction qui supprimera à partie de l'index recu de la page blade un element dans la collection Autorisation de peche
    public function removeAutoPeche($index){
        unset($this->tableAutPeche[$index]);
        $this->tableAutPeche = array_values($this->tableAutPeche);
       // $this->dispatchBrowserEvent("showModalb", []);
    }     




    /******************************************************/
    /******************************************************/
           // ici gère la section Autorisation de Transbordement
           public function addAutoTransb($code){
        
            $this->section="autoTransb";
           
            if($code=="add"){
                    //fonction pour ajouter dans la collection
                    $validationAttributes = $this->validate();
                    
                    $this->tableAutTransb[] = $validationAttributes;
                    // dd($this->tableAutPeche);
                    $this-> autTransb =[];
    
                    $this->dispatchBrowserEvent("showModalb", []);
            };
    
            if($code=="del" AND ($this->tableAutTransb)!=Null){
                    
                    //fonction pour supprimer dans la collection
                    array_pop($this->tableAutTransb);
                    $this->dispatchBrowserEvent("showModalb", []);
    
            };

            if($code=="fresh" and  ($this->autTransb or  $this->updateAutTransb )){
                $this->autTransb = [];
                $this->updateAutTransb=[];
                $this->dispatchBrowserEvent("showModalb", []);
            }       
            
            if($code=="update"){

                // ici j'attribue tranquillement capture upadte trouvé grace à l'index à la variable capture normale 
                $this->autTransb =$this->updateAutTransb["autTransb"];
                
                $validationAttributes = $this->validate(); // je verifie si tous les champs sont bien renseignés
    
                $this->tableAutTransb[$this->indexAutTransbToUpdate]= $validationAttributes; // j'attribue la validation de la section capture correctement renseigné à mon tableaud de collection
         
                //$this->tableCapture[] = $validationAttributes;
                $this->updateAutTransb=[];
                $this->autTransb=[];
                $this->indexAutTransbToUpdate=null;
                $this->dispatchBrowserEvent("showModalb", []);
            }
        }

    // ici la fonction pour editer la ligne de AutTransb selectionnée depuis la page blade
    public function editAutTransb( $index ){
       
        $this->indexAutTransbToUpdate = $index;
        $this->updateAutTransb = $this->tableAutTransb[$index];
        
    }


    // ici je crée une fonction qui supprimera à partie de l'index recu de la page blade un element dans la collection Autorisation de AutTransb
    public function removeAutTransb($index){
        
        unset($this->tableAutTransb[$index]);
        $this->tableAutTransb = array_values($this->tableAutTransb);
       // $this->dispatchBrowserEvent("showModalb", []);
    }  

        



    /******************************************************/
    /******************************************************/
   // ici gère la section info de Transbordement
   public function addInfoTransb($code){ 

   $this->section="infoTransb";
   

    if($code=="add"){
            //fonction pour ajouter dans la collection
            $validationAttributes = $this->validate();
            //dd($this->infoTransb);
            $this->tableInfoTransb[] = $validationAttributes;
            
            $this-> infoTransb =[];

            $this->dispatchBrowserEvent("showModalb", []);
    };

    if($code=="del" AND ($this->tableInfoTransb)!=Null){
            
            //fonction pour supprimer dans la collection
            array_pop($this->tableInfoTransb);
            $this->dispatchBrowserEvent("showModalb", []);

    };


    if($code=="fresh" and  ($this->infoTransb or $this->updateInfoTransb)){
        $this->updateInfoTransb=[];
        $this->infoTransb=[];
        $this->dispatchBrowserEvent("showModalb", []);
    }

    if($code=="update"){

        // ici j'attribue tranquillement capture upadte trouvé grace à l'index à la variable
        $this->infoTransb =$this->updateInfoTransb["infoTransb"];
        
        $validationAttributes = $this->validate(); // je verifie si tous les champs sont bien renseignés

        $this->tableInfoTransb[$this->indexInfoTransbToUpdate]= $validationAttributes; // j'attribue la validation  correctement renseigné à mon tableaud de collection
 
        $this->infoTransb=[];
        $this->updateInfoTransb=[];
        $this->indexInfoTransbToUpdate=null;
        $this->dispatchBrowserEvent("showModalb", []);
    }
 }

     // ici la fonction pour editer la ligne de AutTransb selectionnée depuis la page blade
     public function editInfoTransb( $index ){
       
        $this->indexInfoTransbToUpdate = $index;
        $this->updateInfoTransb = $this->tableInfoTransb[$index];
        
    }


    // ici je crée une fonction qui supprimera à partie de l'index recu de la page blade un element dans la collection Autorisation de AutTransb
    public function removeInfoTransb($index){
        unset($this->tableInfoTransb[$index]);
        $this->tableInfoTransb = array_values($this->tableInfoTransb);
       // $this->dispatchBrowserEvent("showModalb", []);
    }  




    /******************************************************/
    /******************************************************/
    // ici check quicly if i can see the values inside the vessel table belong and sent from navire component
    public function checkAndAddVessel(){
        
        if(!$this->isNavireSent){
            $this->section="navire";
            $validationAttributes = $this->validate();
            $this->navireForDemande[] = $validationAttributes;
           // dd($this->navireForDemande); 
        }   

    }


    /******************************************************/
    /******************************************************/
    ///ici je redirecte l'user pour la selection d'un navire dans la liste
    public function goToNavireList(){
        return redirect()->route("home.navires.listenavire.index");
    
    }


    /******************************************************/
    /******************************************************/
    ///ici je redirecte l'user pour la selection d'un navire dans la liste
    public function goToDashboard(){
        sleep(1);
        return redirect()->route("dashbord");
        
    }


    /******************************************************/
    /******************************************************/

    // ici la fonction pour appeler valider du côté JS l'envoie de la demande
    public function confirmSendinfDemande(){
        sleep(2);
        $this->dispatchBrowserEvent("showPopUpConfirmSendDEmande");
    }


    // fonction to add demande verifie les champs propres à la demande puis crée la demande dans la table 
    public function addDemandeIntoDb(){
        
        $this->section="demande";
        $validationAttributes = $this->validate();
        $this->demandeFields[] = $validationAttributes;

        //verifie ici si le navire exsite dejà dans la table, donc pas besoin de le créer juste l'ajouter 
        if($this->isNavireSent){

            
            $this->insertCapturesIntoDB($this->myNewDemande);
           
             $this->dispatchBrowserEvent("showPopUpDemandeSent");
        }

    }

    public function createDemande(){

        $this->myNewDemande = Demande::create(
            [
                'Resultat' => '3',
                'Ref'=>"DPEP-".Str::upper(Str::random(3)),
                'users_id' => Auth()->user()->id,

            ]
        );
    }


    public function deleteDemande($id=null){
        // dd("testtodeleteDemande");
        DB::table('demandes')
        ->where('id', $id )
        ->delete();
    }

    public function updateDemande($id){
        DB::table('demandes')
        ->where('id', $id)
        ->update([ 
            'Resultat' => '2',
	    // 'Objet_Acces_Port' =>$this->demandeFields['Objet_Acces_Port'],
	    // 'Date_escale' => $this->demandeFields['Date_escale'] ,
        //     'Date_arrivee' => $this->demandeFields['Date_arrivee'] ,
        //     'heure_arrivee' => $this->demandeFields['heure_arrivee'] ,
        //     'Port' => $this->demandeFields['Port'] ,
        //     'page_demande'=> $this->currentSousPageDemande,
        //     'users_id'=>Auth()->user()->id,
        //     'navires_id'=>$this->navireForDemande['id']

	]);
    $this->dispatchBrowserEvent("showModalb", []);
    return redirect()->route("home.demandes.userdemande.index");

    }

    // dans cette fonction j'insere les sections du formulaire dans la base de données, 
    public function insertCapturesIntoDB($demandeObject){
        // ici la section capture
        if($this->tableCapture){
            foreach($this->tableCapture as $i ){
                    
                $demandeObject->capture()->create([
                    'Produit' => $i["capture"]["produit"],
                    'qte_a_bord' =>  $i["capture"]["qteBord"],
                    'qte_debarque' => $i["capture"]["qteDebarque"],
                    'zone_capture' => $i["capture"]["zoneCapture"],
                    'espece' => $i["capture"]["especes"],
                    'navires_id' =>	$this->idNavire,
                ]);
            }
        }

       // ici la section autoPeche
       if($this->tableAutPeche){
            foreach($this->tableAutPeche as $i ){
              
                $dateA = $this->convertDateFormat($i["autPeche"]["dateBegin"]);
                $dateB = $this->convertDateFormat($i["autPeche"]["dateClose"]);

                $demandeObject->autoriPeche()->create([
                    'Deliv_Par' => $i["autPeche"]["deliveryBy"],
                    'Date_Stat_Activities' =>$dateA,
                    'Date_end_Activities' =>$dateB,
                    'Zone_peche' => $i["autPeche"]["zoneCapture"],
                    'espece' => $i["autPeche"]["espece"],
                    'engin' => $i["autPeche"]["engin"],
                    'navires_id' =>	$this->idNavire,
                ]);
            }
       }


       // ici la section autoTransbordement
       if($this->tableAutTransb){

        foreach($this->tableAutTransb as $i ){

                $dateA = $this->convertDateFormat($i["autTransb"]["dateBegin"]);
                $dateB = $this->convertDateFormat($i["autTransb"]["dateClose"]);

                $demandeObject->autoriTransbord()->create([
                    'Identificateur' => $i["autTransb"]["Ident"],
                    'Date_Stat_Activities' =>$dateA,
                    'Date_end_Activities' =>$dateB,
                    'Zone_peche' => $i["autTransb"]["deliveryBy"],
                    'navires_id' =>	$this->idNavire,
                ]);
        }

       }

       // ici la section infoTransbordement
       if($this->tableInfoTransb){
       

        foreach($this->tableInfoTransb as $i ){

            $dateA = $this->convertDateFormat($i["infoTransb"]["DateTransbor"]);

                $demandeObject->infoTransbord()->create([
                    'date_trasnbord' =>$dateA ,
                    'Nom' => $i["infoTransb"]["Nom"],
                    'Lieu' => $i["infoTransb"]["Lieu"],
                    'EtatPavillon' => $i["infoTransb"]["EtatPavillon"],
                    'Numero_ID' => $i["infoTransb"]["NumId"],
                    'Produit' => $i["infoTransb"]["Produit"],
                    'Espèce' => $i["infoTransb"]["Espèce"],
                    'Qté_capture_espèce' => $i["infoTransb"]["Qte"],
                    'Zone_de_Capture' => $i["infoTransb"]["ZoneCapture"],

                    'navires_id' =>	$this->idNavire,
                ]);


        }

       }


    }


    
    /******************************************************/
    /******************************************************/
    //funcction pour convertir la date au format universal
    function convertDateFormat($date)
    {
        $date=(string) $date;
        $parts = explode('/', $date);

        $day = $parts[0] ?? null;
        $month = $parts[1] ?? null;
        $year = $parts[2] ?? null;
        $formattedDate = $year."-".$month."-".$day;
    
        return $formattedDate;
    }

    
    /******************************************************/
    /******************************************************/
    //ici la confirmation to leave the demande form  
    public function confirmLeaveFormDemande(){
        sleep(1);
        if($this->tableCapture or $this->tableAutPeche  or $this->tableAutTransb or $this->tableInfoTransb or $this->demandeFields or $this->isNavireSent){       
            $this->dispatchBrowserEvent("showConfirmMessage", ["message"=> [
                "text" => "Vos informations seront perdues",
                "title" => "Êtes-vous sûr de quitter?",
                "type" => "warning"
            ]]);
        }else{
            $this->goToDashboard();
        }
    }

     
    /******************************************************/
    /******************************************************/
    //ici la fonction de la liste des demandes users pour faire des recherches par ref Delande dans le tableau
    
    
    public function searchDemandeByRef(){
        $this->searchDemandeByRef= "%".$this->searchDemandeByRef."%" ;
    }


}