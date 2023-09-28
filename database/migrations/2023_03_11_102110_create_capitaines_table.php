<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitainesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('capitaines', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Nom_Captaine");
            $table->string("Nationnalite_Captaine");
            $table->string("Contact_Captaine");

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

        Schema::dropIfExists('capitaines');
    }
}
