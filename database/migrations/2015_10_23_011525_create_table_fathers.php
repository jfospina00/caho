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
            $table->string('telephone');
            $table->string('mobile');
            $table->string('date_born');
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
        Schema::drop('fathers');
    }
}
