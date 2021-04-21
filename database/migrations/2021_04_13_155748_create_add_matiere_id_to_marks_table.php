<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddMatiereIdToMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('marks', function (Blueprint $table) {
            $table->unsignedBigInteger('matiere_id')->nullable();
            $table->unsignedBigInteger('filiere_id')->nullable();

            $table->foreign("matiere_id")->references("id")->on("nosmatieres");
            $table->foreign("filiere_id")->references("id")->on("filieres");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_matiere_id_to_marks');
    }
}
