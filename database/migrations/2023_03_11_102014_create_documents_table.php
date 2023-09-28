<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Libelle_Doc");

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
        Schema::table("demandes", function(Blueprint $table){
            $table->dropConstrainedForeignId("demandes_id");
        });



        Schema::dropIfExists('documents');
    }
}
