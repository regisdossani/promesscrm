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
            $table->string('pratique')->nullable;
            $table->string('psychotechnique')->nullable();;
            $table->string('theorique')->nullable();;
            $table->string('entretien')->nullable();;
            $table->softDeletes();
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
