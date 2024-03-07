<?php

// use App\Http\Controllers\invoiceControleur;

use App\Http\Controllers\armateurController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\demandeController;
use App\Http\Controllers\inspectionController;
use App\Http\Controllers\navireController;
// use App\Http\Livewire\Loading;
// use App\Http\Livewire\NaviresComp;
// use App\Models\Role;
// use App\Models\Demande;
// use App\Models\User;
// use App\Models\Document;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/






Route::get('/', function () {
    return view('accueil');
})->name("index-app");


Auth::routes();

Route::get('/accueil', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Groupe relative aux demandes
Route::group([
    "middleware" => ["auth"],
    "as" => "home."
], function(){
    

    /********************************************************************** */
    /*** ici les routes destinées à gérer les requêtes liées au demandes ***/
    Route::group([
        "prefix" => "demandes", 
        "as" => "demandes."
    ], function(){

        Route::get('/detail-demande-{demande}', [demandeController::class,'affOneDemandeDetail'])->name("detailonedemande.index"); //home.demandes.detailonedemande.index

        Route::get('/demande-presentation', [demandeController::class,'affpresentDemande'])->name("presentdemande.index"); //home.demandes.presentdemande.index
        Route::get('/step-A', [demandeController::class,'affNavireForDemande'])->name("naviredemande.index"); //home.demandes.naviredemande.index
        Route::post('/step-1/traitement', [demandeController::class,'traitStep1'])->name("traitStep1.index"); //home.demandes.traitStep1.index
        Route::get('/demande/navire-for-demande',[demandeController::class,'getNavieForDemandeFunct'])->name("navirefordemande.index"); // home.demandes.navirefordemande.index

        Route::get('/step-B', [demandeController::class,'affCaptuDemande'])->name("caputredemande.index"); //home.demandes.caputredemande.index
        Route::get('/step-2/traitement', [demandeController::class,'traitStep2'])->name("traitStep2.index"); //home.demandes.traitStep2.index



        Route::get('/demande/capture', [demandeController::class,'CaptureFunct'])->name("capture.index"); // home.demandes.capture.index
        Route::get('/demande/capture-delete', [demandeController::class,'CaptureDeleteFunct'])->name("capturedelete.index"); // home.demandes.capturedelete.index
       
        
        Route::get('/step-C', [demandeController::class,'affAutoPecheDemande'])->name("autopechedemande.index"); //home.demandes.autopechedemande.index
        Route::get('/demande/peche', [demandeController::class,'PecheFunct'])->name("peche.index"); // home.demandes.peche.index
        Route::get('/demande/peche-delete', [demandeController::class,'PecheDeleteFunct'])->name("pechedelete.index"); // home.demandes.pechedelete.index

        Route::get('/step-D', [demandeController::class,'affuploadFileDemande'])->name("uploadfiledemande.index"); //home.demandes.uploadfiledemande.index
        Route::get('/step-4/traitement', [demandeController::class,'traitStep4'])->name("traitStep4.index"); //home.demandes.traitStep4.index

        Route::get('/recape-demande', [demandeController::class,'affRecapDemande'])->name("recapedemande.index"); //home.demandes.recapedemande.index
        Route::get('/traite-recap-demande', [demandeController::class,'traiteRecapDemande'])->name("traiterecapedemande.index"); //home.demandes.traiterecapedemande.index

        // --------------------------------
        // ici je ne sais pas s'il faut encore enlever carrement les requêtes venant de la page des agents mais il faudra faire un test puis en suite reclasser cela
        
        Route::get('/liste-demandes', [demandeController::class,'affListeDemandes'])->name("listedemandeforagents.index"); //home.demandes.afflistedemandeforagents.index
        Route::get('/agent-accueil', [demandeController::class,'affAccueilAgent'])->name("accueilagents.index"); //home.demandes.accueilagents.index



    });

    /********************************************************************** */
    /*** ici les routes destinées à gérer les requêtes liées aux inspections ***/
    Route::group([
        "prefix" => "inspections",
        "as" => "inspections."
    ], function(){
        Route::get('/new-inspection', [inspectionController::class,'affAddNewInspection'])->name("newinspection.index"); //home.inspections.newinspection.index
        Route::get('/liste-inspection', [inspectionController::class,'affListeInspection'])->name("listinspection.index"); //home.inspections.listinspection.index
        
        Route::resource('/', 'App\Http\Controllers\inspectionController')->names([
            'index' => 'action.index',//home.inspections.action.index     
            'create' => 'action.create',
            'store' => 'action.store',
                        // Add other route names as needed
        ]);
    });


    /********************************************************************** */
    /*** ici les routes destinées à gérer les requêtes liées à la gestion des armateurs ***/
    Route::group([
        "prefix" => "armateurs",
        "as" => "armateurs."
    ], function(){
        Route::get('/liste-armateur', [armateurController::class,'affListeArmateur'])->name("listarmateur.index"); //home.armateurs.listarmateur.index
        Route::resource('/', 'App\Http\Controllers\armateurController')->names([
            'index' => 'action.index',//home.inspections.action.index     
            'create' => 'action.create',
            'store' => 'action.store',
                        // Add other route names as needed
        ]);
    });



    /********************************************************************** */
    /*** ici les routes destinées à gérer les requêtes liées à la gestion des navires ***/
    Route::group([
        "prefix" => "navires",
        "as" => "navires."
    ], function(){
        Route::get('/new-navire', [navireController::class,'affFormAddNewNavire'])->name("newnavire.index"); //home.navires.newnavire.index
        Route::get('/liste-navire', [navireController::class,'affListeNavire'])->name("listnavire.index"); //home.navires.listnavire.index
        
        Route::resource('/', 'App\Http\Controllers\navireController')->names([
            'index' => 'action.index',//home.navires.action.index     
            'create' => 'action.create',
            'store' => 'action.store',
                        // Add other route names as needed
        ]);
    });    



});  
