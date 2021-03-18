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
            $table->string('tel')->nullable();
            $table->$table->tinyInteger('nbre_candidat');
            $table->float('moyenne_generale')->nullable();
            $table->string('mention')->nullable();
            $table->string('pdt_jury')->nullable();
            $table->string('nom_directeur')->nullable();
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
