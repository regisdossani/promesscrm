<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddClasseIdToNosmatieresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nosmatieres', function (Blueprint $table) {
            $table->unsignedBigInteger('classe_id')->nullable();
            $table->foreign("classe_id")->references("id")->on("classes");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('add_classe_id_to_nosmatieres');
    }
}
