<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddFormateurIdToNosmatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nosmatieres', function (Blueprint $table) {
            $table->unsignedBigInteger('formateur_id')->nullable();
            $table->foreign("formateur_id")->references("id")->on("nosmatieres");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_formateur_id_to_nosmatieres');
    }
}
