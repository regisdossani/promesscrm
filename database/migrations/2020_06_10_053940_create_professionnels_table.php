<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionnelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable()->default('nom');
            $table->string('tel_1')->nullable()->default('tel_1');
            $table->string('tel_2')->nullable()->default('tel_2');
            $table->string('email_1')->unique();
            $table->string('email_2')->unique();
            $table->string('zone_geographique')->unique();
            $table->string('thematiques_intervention')->unique();
            $table->string('mode_collaboration')->unique();

            $table->BigInteger('nature_activite')->nullable();
            $table->longtext('nature_commentaire')->nullable();
            $table->Integer('nombre_employe')->nullable();
            $table->longtext('zone_intervention')->nullable();
            $table->longtext('exemple_realisation')->nullable();
            $table->string('pjexemple_realisation')->nullable();

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
        Schema::dropIfExists('professionnels');
    }
}
