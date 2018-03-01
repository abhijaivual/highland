<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('users', function (Blueprint $table) {
            $table->integer('id')->primary();
          
            $table->string('password');
            $table->string('first_name',50);
            $table->string('last_name',50)->nullable();
            $table->date('dob')->nullable();
            $table->string('email',50)->unique();
            $table->bigInteger('phone')->nullable();
            $table->text('address')->nullable();
            $table->string('city',50)->nullable();
            $table->integer('age')->nullable();
            $table->string('gender',50)->nullable();
            $table->string('profile_image',100)->nullable();
            $table->integer('department_id',false,true)->nullable()->length(10);
           
            $table->integer('designation_id',false,true)->nullable()->length(10);
           
            $table->date('doj');
            $table->string('employee_type',50);
            $table->string('reffered_by',50)->nullable();
            $table->string('profile_status',50);
            $table->string('cv',100)->nullable();
             $table->rememberToken();
            $table->timestamps();

              $table->foreign('department_id')->references('dept_id')->on('departments');
                $table->foreign('designation_id')->references('desig_id')->on('designations');

            $table->integer('r_id',false,true)->length(10);
            $table->foreign('r_id')->references('role_id')->on('roles');
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
