<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id')->nullable();
            $table->unsignedBigInteger('filiere_id')->nullable();
            $table->unsignedBigInteger('promo_id')->nullable();
            $table->string('reference')->nullable();

            $table->string('nom')->nullable()->default('nom');
            $table->string('prenom')->nullable();
            $table->string('reference')->nullable()->unique();
            $table->string('sexe')->nullable();
            $table->string('tel')->nullable();
            $table->date('date_naiss')->nullable();
            $table->string('lieu_naiss')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->text('visite_terain')->nullable();
            $table->string('annee')->nullable();

            // $table->unsignedBigInteger('formation_id')->unique()->nullable();

            //Ajouter un document convention de stage,
            //cela sera fait dans table doc_apprenants
            $table->rememberToken();
            $table->timestamps();
/*
            $table->foreign('formation_id')->references('id')->on('formations')
            ->onDelete('cascade')
            ->onUpdate('cascade'); */
            /* $table->foreign('candidat_id')->references('id')->on('candidats')
						->onDelete('cascade')
						->onUpdate('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants');
    }
}
