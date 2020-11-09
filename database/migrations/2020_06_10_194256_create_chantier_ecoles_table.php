<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChantierEcolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chantier_ecoles', function (Blueprint $table) {
            $table->id();
           $table->unsignedBigInteger('client_id')->nullable();
           $table->unsignedBigInteger('profess_id')->nullable();
            $table->unsignedBigInteger('fiche_id')->nullable();
            $table->unsignedBigInteger('teacher_id')->nullable();

            $table->string('modalite_duree')->nullable();
            $table->string('modalite_logistique')->nullable();

            $table->string('nature')->nullable()->default('nature');
            $table->longText('description')->nullable();

            $table->longText('participation_formateurs')->nullable();
            $table->longText('participation_professionnels')->nullable();
            $table->timestamps();

            $table->foreign('fiche_id')->references('id')->on('fichedescriptives')
            ->onDelete('cascade')
           ->onUpdate('cascade');

           $table->foreign('teacher_id')->references('id')->on('formateurs')
           ->onDelete('cascade')
          ->onUpdate('cascade');

            $table->foreign('profess_id')->references('id')->on('professionnels')
            ->onDelete('cascade')
           ->onUpdate('cascade');
            $table->foreign('client_id')->references('id')->on('clients')
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
        Schema::dropIfExists('chantier_ecoles');
    }
}
