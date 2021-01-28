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
            $table->unsignedBigInteger('filiere_id')->nullable();
            $table->unsignedBigInteger('promo_id')->nullable();
            $table->string('reference')->nullable();

            $table->string('nom')->nullable()->default('nom');
            $table->string('tel')->nullable()->default('tel_1');
            $table->string('email')->unique();
            $table->string('sexe')->nullable();

            $table->string('provenance')->nullable();
            $table->string('region')->nullable();

            $table->string('parrain')->nullable();
            $table->string('tel_parrain')->nullable();
            $table->string('email_parrain')->nullable();

           $table->boolean('reception_dossier')->nullable()->default(false);
            $table->string('pj_depotdossier')->nullable()->default('pj_depotdossier');
            $table->string('pj_depotdossier2')->nullable()->default('pj_depotdossier2');
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
