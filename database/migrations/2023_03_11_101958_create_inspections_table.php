<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInspectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inspections', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->date("Date_Debut_Inspection");
            $table->date("Date_Fin_Inspection");

            $table->string("Rapport_Inspection");
            $table->string("Observation");
            $table->string("Observation_Capture");

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
        Schema::table("navires", function(Blueprint $table){
            $table->dropConstrainedForeignId("navires_id");
        });

        Schema::table("users", function(Blueprint $table){
            $table->dropConstrainedForeignId("users_id");
        });

        Schema::dropIfExists('inspections');
    }
}
