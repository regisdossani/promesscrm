<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantChantierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenant_chantier', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('chantier_id');
            $table->unsignedBigInteger('apprenant_id');


            $table->foreign('chantier_id')->references('id')->on('chantiers')
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
       /*  Schema::table('apprenant_chantier', function(Blueprint $table) {
			$table->dropForeign('chantier_id');
			$table->dropForeign('apprenant_id');
		}); */

        Schema::dropIfExists('apprenant_chantier');
    }
}
