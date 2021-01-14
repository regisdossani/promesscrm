<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntpartenairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entpartenaires', function (Blueprint $table) {
            $table->id();
            $table->string('raison_sociale')->nullable();
            $table->string('reference')->nullable();
            $table->string('activite_entreprise')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable();

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
        Schema::dropIfExists('entpartenaires');
    }
}
