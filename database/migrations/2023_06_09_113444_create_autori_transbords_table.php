<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoriTransbordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autori_transbords', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Identificateur");
            $table->date("Date_demande");
            $table->string("Libelle_Autorisation");
            $table->date("Date_Deliv_Autorisation");
            $table->string("Commentaire");
            $table->string("Deliv_Par");

            $table->date('Date_Stat_Activities');
            $table->date('Date_end_Activities');

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

        Schema::dropIfExists('autori_transbords');
    }
}
