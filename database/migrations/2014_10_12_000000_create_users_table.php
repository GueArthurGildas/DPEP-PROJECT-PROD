<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');//$table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

            $table->foreignId("agents_id")->constrained("agents");
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

        Schema::table("agents", function(Blueprint $table){
            $table->dropConstrainedForeignId("agents_id");
        });

        Schema::table("societe", function(Blueprint $table){
            $table->dropConstrainedForeignId("societe_id");
        });

        Schema::dropIfExists('users');
    }
}
