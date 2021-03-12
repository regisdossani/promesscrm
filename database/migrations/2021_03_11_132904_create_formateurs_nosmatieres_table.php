<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormateursNosmatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formateurs_nosmatieres', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('formateur_id');
            $table->unsignedBigInteger('nosmatiere_id');
            $table->foreign('nosmatiere_id')->references('id')->on('nosmatieres')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('formateurs_nosmatieres');
    }
}
