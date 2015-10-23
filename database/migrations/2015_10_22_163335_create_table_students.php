<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function ($table) {
            $table->increments('id');
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->double('telephone');
            $table->double('mobile');
            $table->date('date_born');
            $table->string('email');
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
        schema::drop('students');
    }
}
