<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();

            $table->unsignedInteger('apprenant_id')->nullable();
            $table->unsignedInteger('module_id')->nullable();
            $table->unsignedInteger('formation_id')->nullable();
            $table->unsignedInteger('class_id')->nullable();
            $table->double('note_exam')->nullable();
            $table->double('note1')->nullable();
            $table->double('note2')->nullable();
            $table->string('year')->nullable();

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
        Schema::dropIfExists('marks');
    }
}