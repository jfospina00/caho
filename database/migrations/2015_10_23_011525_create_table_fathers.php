<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableFathers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fathers', function ($table) {
            $table->increments('id');
            $table->integer('document');
            $table->string('name');
            $table->string('last_name');
            $table->string('address');
            $table->double('telephone');
            $table->double('mobile');
            $table->date('date_born');
            $table->string('email');
            $table->integer('user_id');
            $table->integer('student_id');
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
        Schema::drop('fathers');
    }
}
