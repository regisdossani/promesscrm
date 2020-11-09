<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs', function (Blueprint $table) {
            $table->id();

            $table->string('username')->nullable()->default('username');
            $table->string('civilite')->nullable()->default('civilite');
            $table->string('prenom')->nullable()->default('prenom');
            $table->string('nom')->nullable()->default('nom');
            $table->string('date_naiss')->nullable()->default('date_naiss');
            $table->string('password');
            $table->boolean('contratcadre')->nullable();
            $table->string('Contratcadre_pj')->nullable();
            $table->string('CV_pj')->nullable();
            $table->longText('specialites')->nullable();
            $table->longText('autres_activites')->nullable();
            $table->boolean('formation_07/2018')->nullable();
            $table->boolean('formation_01/2019_')->nullable();
            $table->boolean('formation_securite_06/2019')->nullable();

            $table->string('tel_1')->nullable();
            $table->string('email')->nullable()->unique();
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
        Schema::dropIfExists('formateurs');
    }
}
