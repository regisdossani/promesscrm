<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantStageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant_stage', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('stage_id');
            $table->unsignedBigInteger('apprenant_id');
            // $table->unsignedBigInteger('class_id');

            $table->foreign('stage_id')->references('id')->on('stages')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('apprenant_id')->references('id')->on('apprenants')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenant_stage');
    }
}

