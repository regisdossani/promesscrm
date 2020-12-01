<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEqattendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eqattendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->date('attendance_date');
            $table->dateTime('in_time');
            $table->dateTime('out_time');
            $table->time('working_hour');
            $table->string('status',20)->nullable();//1 = in late, 2 = out early
            $table->enum('present', [0,1])->default(0);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('employee_id')->references('id')->on('equipes')
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
        Schema::dropIfExists('eqattendances');
    }
}
