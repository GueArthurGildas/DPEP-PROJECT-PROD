<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('captures', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date("Date_Capture");
            $table->string("Produit");
            $table->string("qte_a_bord");
            $table->string("qte_debarque");
            $table->string("espece");
            $table->string("zone_capture");



            $table->foreignId("navires_id")->constrained("navires");
            $table->foreignId("demandes_id")->constrained("demandes");

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

        Schema::dropIfExists('captures');
    }
}
