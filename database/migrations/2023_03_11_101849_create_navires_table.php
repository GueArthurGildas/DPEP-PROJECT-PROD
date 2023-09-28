<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNaviresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('navires', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string("Nom_Navire");
            $table->string("Engin_Interne");

            $table->string("Dimension_Navire");
            $table->string("Num_IRCS");
            $table->string("couleur_Navire");
            $table->string("Etat_Pavillon");
            $table->string("Port_Attache");
            $table->string("Doc_Navire");

            $table->string("Pays_originin_Navire");
            $table->string("Pays_enregistre_Navire");
            $table->string("Unique_Vessel_Identifier");
            $table->string("Length_Overall");
            $table->string("Net_Registered_Tonnage");
            $table->string("Gross_Tonnage");
            $table->string("Gross_Registered_Tonnage");
            $table->string("Power_of_Main_Engine");
            $table->string("Power_unit");
            $table->string("Hull_Material");
            $table->string("Fish_Hold_Capacity");
            $table->string("Fish_Hold_Type");
            $table->string("Net_tonnage");
            $table->string("Id_Certificat_Immat");
            $table->string("Type_Navire");
            $table->string("Omi");
            $table->string("ORGP");
            $table->string("Id_Extern");




            $table->foreignId("societe_id")->constrained("societe");



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
        Schema::table("societe", function(Blueprint $table){
            $table->dropConstrainedForeignId("societe_id");
        });

        Schema::dropIfExists('navires');
    }
}
