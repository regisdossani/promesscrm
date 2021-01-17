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
            $table->unsignedInteger('promo_id')->nullable();
            $table->unsignedInteger('classe_id')->nullable();

            $table->double('note3')->nullable();
            $table->double('note1')->nullable();
            $table->double('note2')->nullable();
            $table->double('moyenne')->nullable();

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
