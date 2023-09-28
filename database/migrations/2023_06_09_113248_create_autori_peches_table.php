<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoriPechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autori_peches', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date("Date_demande");
            $table->string("Libelle_Autorisation");
            $table->date("Date_Deliv_Autorisation");
            $table->string("Commentaire");
            $table->string("Deliv_Par");
            $table->string("espece");
            $table->string("engin");
            $table->string("Zone_peche");


            $table->string('Date_Stat_Activities');
            $table->string('Date_end_Activities');


            $table->foreignId("demandes_id")->constrained("demandes");
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
        
        Schema::dropIfExists('autori_peches');
    }
}
