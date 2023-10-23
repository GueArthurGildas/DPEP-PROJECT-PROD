<?php

// use App\Http\Controllers\invoiceControleur;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\demandeController;
use App\Http\Livewire\Demandes;
// use App\Http\Livewire\Loading;

use App\Http\Livewire\Utilisateurs;
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

// // Route::get('/dashbord', function () {return view('myDashbord');})->name("dashbord");
// Route::get('/dashb-recept', [invoiceControleur::class,'printRecept'] )->name("dashbord");
// Route::get('/dashb-demande', [invoiceControleur::class,'printDemande'] )->name("dashbord-demande");


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::post('/pdf', [invoiceControleur::class,'index'])->name("pdf");



// Groupe relative aux demandes
Route::group([
    "middleware" => ["auth"],
    "as" => "home."
], function(){
    
    // Route::group([
    //     "prefix" => "habilitations",
    //     'as' => 'habilitations.'
    // ], function(){

    //     Route::get("/utilisateurs", Utilisateurs::class)->name("users.index");

    // });

    // Route::group([
    //     "prefix" => "navires",
    //     "as" => "navires."
    // ], function(){
    //     Route::get('/liste-navire', NaviresComp::class)->name("listenavire.index"); //home.navires.newnavire.index
    //     Route::get('/historique-navire', NaviresComp::class)->name("histonavire.index"); 
    // });


    Route::group([
        "prefix" => "demandes", 
        "as" => "demandes."
    ], function(){
        Route::get('/liste-demandes', Demandes::class)->name("listdemande.index"); //home.demandes.listdemande.index
        Route::get('/new-demande', [demandeController::class,'index'])->name("newdemande.index"); // home.demandes.newdemande.index
        Route::get('/user-demandes', Demandes::class)->name("mesdemande.index"); //home.demandes.mesdemande.index
        Route::get('/demande', Demandes::class)->name("voirdemande.index"); //home.demandes.voirdemande.index
        Route::get('/demande-detail', Demandes::class)->name("demandedetail.index"); //home.demandeuser.demande.index


        /************************************************************************************************************************** */
        //****Ici les routes qui intercepteront les requêtes ajax pour les fonctions appropriées à chaque section du formulaire demande */
        Route::get('/demande/capture', [demandeController::class,'CaptureFunct'])->name("capture.index"); // home.demandes.capture.index
        Route::get('/demande/capture-delete', [demandeController::class,'CaptureDeleteFunct'])->name("capturedelete.index"); // home.demandes.capturedelete.index
        Route::get('/demande/peche', [demandeController::class,'PecheFunct'])->name("peche.index"); // home.demandes.peche.index
        Route::get('/demande/peche-delete', [demandeController::class,'PecheDeleteFunct'])->name("pechedelete.index"); // home.demandes.pechedelete.index
        Route::get('/demande/transb', [demandeController::class,'TransbFunct'])->name("transb.index"); // home.demandes.transb.index
        Route::get('/demande/update-demande', [demandeController::class,'updateDemandeFunct'])->name("updateDemande.index"); // home.demandes.updateDemande.index
        Route::get('/demande/info-transb', [demandeController::class,'infoTransbFunct'])->name("infotransb.index"); // home.demandes.infotransb.index
        Route::get('/demande/navire-port', [demandeController::class,'navireAndPortFunct'])->name("navireport.index"); // home.demandes.navireport.index
        /************************************************************************************************************************** */


    });

    



    

    Route::group([
        "prefix" => "inspections",
        "as" => "inspections."
    ], function(){
        Route::get('/listeinspections', [App\Http\Controllers\demandeController::class, 'index'])->name("listinspections.index"); //home.newinspections.newinspections.index
        Route::get('/newinspections', [App\Http\Controllers\demandeController::class, 'index'])->name("newinspections.index"); 
        
    });
});  







Auth::routes();

Route::get('/Accueil', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
