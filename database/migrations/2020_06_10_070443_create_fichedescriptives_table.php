<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFichedescriptivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichedescriptives', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable()->default('Fiche descriptive pour');
            $table->string('context')->nullable()->default('text');
            $table->string('besoins')->nullable()->default('text');
            $table->string('dimensionnement')->nullable()->default('text');
            $table->longText('interventions')->nullable();
            $table->double('devis_id')->nullable();
            $table->double('cout')->nullable();
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
        Schema::dropIfExists('fichedescriptives');
    }
}
