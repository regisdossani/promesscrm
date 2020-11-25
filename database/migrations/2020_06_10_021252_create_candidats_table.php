<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidats', function (Blueprint $table) {
            $table->id();
            $table->string('civilite')->nullable()->default('username');
            $table->string('prenom')->nullable()->default('prenom');
            $table->string('nom')->nullable()->default('nom');
            $table->string('statut')->nullable()->default('statut');
            $table->date('date_naiss')->nullable();
            $table->string('parrain')->nullable()->default('parrain');
            $table->string('tel_1')->nullable()->default('tel_1');
            $table->string('tel_2')->nullable()->default('tel_2');
            $table->string('email_1')->unique();
            $table->string('email_2')->nullable();
            $table->string('adresse')->nullable();
            $table->string('choix_formation')->nullable();

            $table->boolean('depot_dossier')->nullable()->default(false);
            $table->string('pj_depotdossier')->nullable()->default('pj_depotdossier');
            $table->string('pj_depotdossier2')->nullable()->default('pj_depotdossier2');

            $table->date('test_ecrit')->nullable();
            $table->date('test_oral')->nullable();
            $table->string('test_pj')->nullable();
            $table->string('orientation')->nullable()->default('orientation');
            $table->longText('commentaire')->nullable();
            $table->string('avatar')->default('default.jpg');
            $table->rememberToken();
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
        Schema::dropIfExists('candidats');
    }
}
