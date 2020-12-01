<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('class_numeric');
             $table->unsignedBigInteger('apprenant_id');
             $table->unsignedBigInteger('formateur_id');
            $table->unsignedBigInteger('formation_id');
            $table->unsignedBigInteger('module_id');

            $table->string('class_description');

            $table->timestamps();
        });

        Schema::create('classe_formateur', function (Blueprint $table) {
            $table->id();
             $table->unsignedBigInteger('classe_id');
            $table->unsignedBigInteger('formateur_id');

            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('formateur_id')->references('id')->on('formateurs')->onDelete('cascade');
        });

 Schema::create('classe_module', function (Blueprint $table) {
            $table->id();

             $table->unsignedBigInteger('classe_id');
             $table->unsignedBigInteger('module_id');

            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
