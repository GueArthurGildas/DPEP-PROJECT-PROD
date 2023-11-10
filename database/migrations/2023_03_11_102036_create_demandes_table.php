<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDemandesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Ref");  
            $table->string("Libelle_demande");
            $table->date("Date_demande");
            $table->string("Objet_Acces_Port"); 
              
            $table->string("Statut_traitement");        
            $table->boolean("Resultat");        
            $table->string("Date_arrivee");        
            $table->string("Date_escale");        
            $table->string("Port_Dern_Escal");      
            $table->string("Port_Escale_Envisag");      
            $table->string("heure_arrivee"); 
            
            $table->string("page_demande");  
            // $table->string("heure_arrivee");  
            
            
            



            //$table->foreignId("inspections_id")->constrained("inspections"); /// voir s'il faut supprimer cette relation
            $table->foreignId("users_id")->constrained("users");
            $table->foreignId("navires_id")->constrained("navires");
           


        });

        schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table("inspections", function(Blueprint $table){
        //     $table->dropConstrainedForeignId("inspections_id");
        // });
        Schema::table("navires", function(Blueprint $table){
            $table->dropConstrainedForeignId("navires_id");
        });
        Schema::table("users", function(Blueprint $table){
            $table->dropConstrainedForeignId("users_id");
        });


        Schema::dropIfExists('demandes');
    }
}
