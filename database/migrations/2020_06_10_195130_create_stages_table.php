<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titre')->nullable()->default('titre du stage');
             $table->text('stage_sujet')->nullable();
            $table->date('stage_debut')->nullable();
            $table->date('stage_fin')->nullable();
            $table->smallInteger('stage_nbr_apprenant');
			// $table->string('stage_encadreur_s', 20);
            $table->string('pjconvention_stage')->nullable();
            $table->unsignedBigInteger('professionnel_id');

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
       /*  Schema::table('stages', function(Blueprint $table) {
			$table->dropForeign('apprenant_id');
			$table->dropForeign('professionnel_id');
		}); */

        Schema::dropIfExists('stages');
    }
}
