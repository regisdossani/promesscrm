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
            $table->string('prenom')->nullable();
            $table->string('nom')->nullable();
            $table->string('reference')->nullable();

            $table->string('sexe')->nullable();
            $table->string('tel')->nullable();
            $table->string('email')->nullable()->unique();
            $table->date('date_naiss')->nullable()->unique();
            $table->string('lieu_naiss')->nullable();

            $table->string('formation')->nullable();
            $table->string('password');
            $table->string('contratcadre_pj')->nullable();
            $table->string('cv_pj')->nullable();
            $table->string('structure')->nullable();
            $table->string('fonction')->nullable();
            //  $table->unsignedBigInteger('module_id')->nullable();
            $table->string('adresse')->nullable();

           /*
           $table->longText('specialites')->nullable();
            $table->longText('autres_activites')->nullable();
           $table->boolean('formation_07/2018')->nullable();
            $table->boolean('formation_01/2019_')->nullable();
            $table->boolean('formation_securite_06/2019')->nullable(); */
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
