<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvalsequencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evalsequences', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->unsignedBigInteger('sequence_id');

            $table->timestamps();

            $table->foreign('sequence_id')->references('id')->on('sequences')
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
        Schema::dropIfExists('evalsequences');
    }
}
