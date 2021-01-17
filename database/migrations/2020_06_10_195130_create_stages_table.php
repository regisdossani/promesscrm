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
            $table->date('date')->nullable();
            $table->string('duree')->nullable();
            $table->string('referent')->nullable();
            $table->unsignedBigInteger('encadreur_id');
            $table->string('entreprise')->nullable();
            $table->string('rapport')->nullable();
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
