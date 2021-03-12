<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReleveIndividuelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('releve_individuels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('apprenant_id')->nullable();
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->longText('appreciations_generales')->nullable();
            $table->string('felicitations', 100)->nullable();
            $table->string('encouragements', 100)->nullable();
            $table->string('th', 100)->nullable();
            $table->string('passable', 100)->nullable();
            $table->string('nom_directeur', 100)->nullable();

            $table->double('moyenne_classe', 15, 8)->nullable();
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
        Schema::dropIfExists('releve_individuels');
    }
}
