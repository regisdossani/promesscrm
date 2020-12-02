<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApprenantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apprenants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidat_id')->nullable();
            $table->unsignedBigInteger('class_id')->nullable();

            $table->string('username')->nullable()->default('username');

            $table->string('nom')->nullable()->default('nom');
            $table->string('prenom')->nullable()->default('Régis');

            $table->string('email')->unique();
            $table->string('password');

            $table->string('note_1')->nullable()->default('note 1');
            $table->string('note_2')->nullable()->default('note 2');
            $table->string('note_3')->nullable()->default('note 3');
            $table->longText('visite_terain1')->nullable();
            $table->longText('visite_terain2')->nullable();
            $table->longText('visite_terain3')->nullable();

            $table->unsignedBigInteger('formation_id')->unique()->nullable();

            //Ajouter un document convention de stage,
            //cela sera fait dans table doc_apprenants
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('formation_id')->references('id')->on('formations')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            /* $table->foreign('candidat_id')->references('id')->on('candidats')
						->onDelete('cascade')
						->onUpdate('cascade'); */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apprenants');
    }
}
