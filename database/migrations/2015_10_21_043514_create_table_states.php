<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableStates extends Migration
{

    public function up()
    {
        Schema::create('states', function ($table) {
            $table->increments('id');
            $table->string('name_state');
            $table->text('description_state');
        });
    }

    public function down()
    {
        Schema::drop('states');
    }
}
