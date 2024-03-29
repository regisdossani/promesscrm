<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncadreursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encadreurs', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('professionel_id')->nullable();
			$table->unsignedBigInteger('formateur_id')->nullable();
            $table->string('noms')->nullable();
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
        Schema::dropIfExists('encadreurs');
    }
}
