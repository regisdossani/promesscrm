<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestcandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testcandidats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id')->nullable;
            $table->date('test_ecrit')->nullable();
            $table->date('entretien')->nullable();
            $table->string('test_pj')->nullable();
            $table->string('resultat')->nullable();
            $table->boolean('signature')->nullable();
            $table->longText('commentaire')->nullable();
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
        Schema::dropIfExists('testcandidats');
    }
}
