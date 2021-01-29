<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNosmatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nosmatieres', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable();
            $table->string('reference')->unique();
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('formateur_id');
            $table->integer('coef')->unsigned()->nullable();
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
        Schema::dropIfExists('nosmatieres');
    }
}
