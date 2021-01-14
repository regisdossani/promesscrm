<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuivipostchantiersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suivipostchantiers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('chantier_id')->nullable();
            $table->string('evaluation')->nullable();
            $table->longText('maintenance')->nullable();
            $table->timestamps();
            $table->foreign('chantier_id')->references('id')->on('chantiers')
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
        Schema::dropIfExists('suivipostchantiers');
    }
}
