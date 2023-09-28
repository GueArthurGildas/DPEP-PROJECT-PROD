<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoTransbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info__transbs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

       
            $table->string("date_trasnbord");
            $table->string("Nom");
            $table->string("Lieu");
            $table->string("Numero_ID");      
            $table->string("Produit");
            $table->string("Espèce");
            $table->integer("Qté_capture_espèce");
            $table->string("Zone_de_Capture");
            $table->string("EtatPavillon");

            $table->foreignId("demande_id")->constrained("demandes");
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
        Schema::table("navires", function(Blueprint $table){
            $table->dropConstrainedForeignId("navires_id");
        });

        Schema::table("demandes", function(Blueprint $table){
            $table->dropConstrainedForeignId("demandes_id");
        });

        Schema::dropIfExists('info__transbs');
    }
}
