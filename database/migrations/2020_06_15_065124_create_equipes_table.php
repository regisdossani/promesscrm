<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('equipes', function (Blueprint $table) {
            $table->id();
            $table->string('username')->nullable();
            $table->string('nom')->nullable()->default('nom');
            $table->string('prenom')->nullable()->default('prenom');
            $table->string('password');
            $table->date('date_naiss')->nullable();
            $table->string('tel_1')->nullable()->default('tel_1');
            $table->string('tel_2')->nullable()->default('tel_2');
            $table->string('email')->nullable()->unique();
            $table->string('email_2')->nullable();
            $table->string('titre_poste')->nullable();
            $table->string('adresse')->nullable()->default('adresse');
            $table->time('duty_start')->nullable();
            $table->time('duty_end')->nullable();

            $table->string('cv')->nullable();
            $table->string('contrat')->nullable();
            $table->enum('status', [0,1])->default(1);
            $table->string('avatar')->nullable();
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
        Schema::dropIfExists('equipes');
    }
}
