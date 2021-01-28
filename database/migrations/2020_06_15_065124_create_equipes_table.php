<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom')->nullable();
            $table->string('reference')->nullable();
            $table->string('sexe')->nullable();

            $table->string('password');
            $table->string('tel')->nullable();
            $table->string('email')->nullable()->unique();
             $table->unsignedBigInteger('role')->nullable();

            $table->string('cv')->nullable();
            $table->string('contrat')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipes');
    }
}
