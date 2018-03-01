<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendances', function (Blueprint $table) {
             $table->increments('attid');
             $table->integer('empid');
            $table->string('fname')->nullable();
            $table->date('att_date');
            $table->string('shift');
            $table->time('shift_start');
            $table->time('shift_end');
            $table->time('in_time')->nullable();
            $table->time('out_time')->nullable();
            $table->time('shift_hrs');
            $table->time('work_hrs')->nullable();
            $table->time('ot_hrs')->nullable();
            $table->integer('early_arival')->nullable();
            $table->integer('late_arival')->nullable();
            $table->integer('late_departure')->nullable();
            $table->integer('early_departure')->nullable();
            $table->string('attendance_status')->nullable();

            $table->foreign('empid')->references('id')->on('users');
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
        Schema::dropIfExists('attendances');
    }
}
