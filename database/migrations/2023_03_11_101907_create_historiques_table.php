<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historiques', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Libelle_Histo");
            $table->string("Lien_Contrôle");
            $table->string("Ports_Visites");
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
        Schema::dropIfExists('historiques');
    }
}
