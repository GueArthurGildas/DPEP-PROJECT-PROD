<?php

// use App\Http\Controllers\invoiceControleur;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
        Route::get('/new-demande', Demandes::class)->name("newdemande.index"); // home.demandes.newdemande.index
        Route::get('/user-demandes', Demandes::class)->name("mesdemande.index"); //home.demandes.mesdemande.index
        Route::get('/demande', Demandes::class)->name("voirdemande.index"); //home.demandes.voirdemande.index
        Route::get('/user-demande', Demandes::class)->name("userdemande.index"); //home.demandeuser.demande.index
        Route::get('/demande-detail', Demandes::class)->name("demandedetail.index"); //home.demandeuser.demande.index

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
