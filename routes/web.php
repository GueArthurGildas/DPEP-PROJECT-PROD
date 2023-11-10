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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Groupe relative aux demandes
Route::group([
    "middleware" => ["auth"],
    "as" => "home."
], function(){
    


    /*** ici les routes destinées à gérer les requêtes liées au demandes ***/
    Route::group([
        "prefix" => "demandes", 
        "as" => "demandes."
    ], function(){

        Route::get('/detail-demande', [demandeController::class,'affOneDemandeDetail'])->name("detailonedemande.index"); //home.demandes.detailonedemande.index

        Route::get('/demande-presentation', [demandeController::class,'affpresentDemande'])->name("presentdemande.index"); //home.demandes.presentdemande.index
        Route::get('/step-1', [demandeController::class,'affNavireForDemande'])->name("naviredemande.index"); //home.demandes.naviredemande.index
        Route::post('/step-1/traitement', [demandeController::class,'traitStep1'])->name("traitStep1.index"); //home.demandes.traitStep1.index
        Route::get('/demande/navire-for-demande',[demandeController::class,'getNavieForDemandeFunct'])->name("navirefordemande.index"); // home.demandes.navirefordemande.index

        Route::get('/step-2', [demandeController::class,'affCaptuDemande'])->name("caputredemande.index"); //home.demandes.caputredemande.index
        Route::get('/step-2/traitement', [demandeController::class,'traitStep2'])->name("traitStep2.index"); //home.demandes.traitStep2.index



        Route::get('/demande/capture', [demandeController::class,'CaptureFunct'])->name("capture.index"); // home.demandes.capture.index
        Route::get('/demande/capture-delete', [demandeController::class,'CaptureDeleteFunct'])->name("capturedelete.index"); // home.demandes.capturedelete.index
       
        
        Route::get('/step-3', [demandeController::class,'affAutoPecheDemande'])->name("autopechedemande.index"); //home.demandes.autopechedemande.index
        Route::get('/demande/peche', [demandeController::class,'PecheFunct'])->name("peche.index"); // home.demandes.peche.index
        Route::get('/demande/peche-delete', [demandeController::class,'PecheDeleteFunct'])->name("pechedelete.index"); // home.demandes.pechedelete.index

        Route::get('/step-4', [demandeController::class,'affuploadFileDemande'])->name("uploadfiledemande.index"); //home.demandes.uploadfiledemande.index
        Route::get('/step-4/traitement', [demandeController::class,'traitStep4'])->name("traitStep4.index"); //home.demandes.traitStep4.index

        Route::get('/recape-demande', [demandeController::class,'affRecapDemande'])->name("recapedemande.index"); //home.demandes.recapedemande.index



        // --------------------------------
        


    });


    Route::group([
        "prefix" => "inspections",
        "as" => "inspections."
    ], function(){
        Route::get('/listeinspections', [App\Http\Controllers\demandeController::class, 'index'])->name("listinspections.index"); //home.newinspections.newinspections.index
        Route::get('/newinspections', [App\Http\Controllers\demandeController::class, 'index'])->name("newinspections.index"); 
        
    });

});  
