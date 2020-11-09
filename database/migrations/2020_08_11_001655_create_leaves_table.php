<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->enum('leave_type', [1,2,3])->default(1);
            $table->date('leave_date');
            $table->string('document')->nullable();
            $table->text('description')->nullable();
            //1= pending, 2= approved, 3= Rejected
            $table->enum('status', [1,2,3])->default(1);
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
        Schema::dropIfExists('leaves');
    }
}
