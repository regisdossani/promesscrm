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
            $table->string('nom')->nullable()->default('nom');
            $table->string('prenom')->nullable()->default('prenom');
            $table->string('email')->unique();
            $table->string('tel')->nullable()->default('tel');

            $table->string('nature_personne_ressource')->nullable()->default('text');
            $table->longText('objet_du_contact')->nullable();
            $table->longText('description')->nullable();
            $table->string('piece_jointe')->nullable()->default('text');

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
