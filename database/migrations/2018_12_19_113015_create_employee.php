<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('first_name',100);
            $table->string('middle_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('father_name',100);
            $table->string('mother_name',100);
            $table->string('passport',100);
            $table->string('visa',100);
            $table->date('visa_validity',100);
            $table->date('dob',100);
            $table->string('gender',15);
            $table->string('marital_statement',15);
            $table->string('country',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee');
    }
}
