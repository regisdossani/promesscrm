<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersRessourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pers_ressources', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
          $table->string('reference')->nullable()->unique();
;
            $table->string('sexe')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->unique();
            $table->string('qualite')->nullable();
            $table->string('specialites')->nullable();
            $table->boolean('atelier_de_juillet_2018')->nullable();
            $table->boolean('formation_de_janvier_2019')->nullable();

            $table->string('piece_jointe')->nullable();
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
        Schema::dropIfExists('pers_ressources');
    }
}
