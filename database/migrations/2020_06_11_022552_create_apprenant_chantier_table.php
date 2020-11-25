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
            $table->unsignedBigInteger('formateur_id');
            $table->unsignedBigInteger('professionnel_id');


            $table->foreign('formateur_id')->references('id')->on('formateurs')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('professionnel_id')->references('id')->on('professionnels')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('chantier_id')->references('id')->on('chantier_ecoles')
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
