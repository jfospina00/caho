<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

       
        DB::table('users')->insert([
        	//1
            'name'     => "Homero",
            'email'    => "io@homero.me",
            'password' => bcrypt("profesor"),
        ]);
        DB::table('users')->insert([
        	//2
            'name'     => "bart",
            'email'    => "io@bart.me",
            'password' => bcrypt("eestudiante"),
        ]);
    }
}
