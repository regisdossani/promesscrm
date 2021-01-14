<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChantiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chantiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('newchantier_id');

            $table->string('titre')->nullable();
            $table->string('reference')->nullable();
            $table->date('date')->nullable();

            $table->integer('duree_j')->nullable();
            $table->integer('duree_h')->nullable();
            $table->string('maitre_oeuvre')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->integer('nbre_appt')->nullable();
            $table->longText('descriptif')->nullable();
            $table->string('fiche_descriptive')->nullable();
            $table->integer('etat')->nullable();
            $table->longText('obs')->nullable();
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
        Schema::dropIfExists('chantiers');
    }
}
