<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleveFinalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releve_finals', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id')->nullable();
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->string('tel', 100)->nullable();

            $table->$table->tinyInteger('nbre_candidat')->nullable();

            $table->float('moyenne_generale', 100)->nullable();
            $table->string('mention', 100)->nullable();
            $table->string('pdt_jury', 100)->nullable();
            $table->string('nom_directeur', 100)->nullable();
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
        Schema::dropIfExists('releve_finals');
    }
}
