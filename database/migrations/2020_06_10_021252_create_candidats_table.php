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
            $table->string('nom')->nullable()->default('nom');
            $table->string('tel')->nullable()->default('tel_1');
            $table->string('email')->unique();
            $table->string('provenance')->nullable();
            $table->string('region')->nullable();
            $table->unsignedBigInteger('promo')->nullable();
            $table->unsignedBigInteger('filiere')->nullable();
            $table->string('parrain')->nullable();
            $table->string('tel_parrain')->nullable();
            $table->string('email_parrain')->nullable();

           $table->boolean('reception_dossier')->nullable()->default(false);
            $table->string('pj_depotdossier')->nullable()->default('pj_depotdossier');
            $table->string('pj_depotdossier2')->nullable()->default('pj_depotdossier2');

            $table->date('test_ecrit')->nullable();
            $table->date('entretien')->nullable();
            $table->string('test_pj')->nullable();
            $table->string('resultat')->nullable();
            $table->boolean('signature')->nullable();
            $table->longText('commentaire')->nullable();
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
