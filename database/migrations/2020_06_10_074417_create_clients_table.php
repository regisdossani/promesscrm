<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('civilite')->nullable()->default('username');
            $table->string('prenom')->nullable()->default('prenom');
            $table->string('nom')->nullable()->default('nom');
            $table->string('tel_1')->nullable()->default('tel_1');
            $table->string('tel_2')->nullable()->default('tel_2');
            $table->string('email')->unique();
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
        Schema::dropIfExists('clients');
    }
}
