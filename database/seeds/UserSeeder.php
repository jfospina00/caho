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
        	'id'       => "7890123",
            'name'     => "Homero",
            'email'    => "io@homero.me",
            'password' => bcrypt("profesor"),
            'rol_id'   => 2
        ]);
        DB::table('users')->insert([
        	'id'       => "12345",
            'name'     => "bart",
            'email'    => "io@bart.me",
            'password' => bcrypt("estudiante"),
            'rol_id'   => 1
        ]);
         DB::table('users')->insert([
        	'id'       => "45678",
            'name'     => "marge",
            'email'    => "io@marge.me",
            'password' => bcrypt("padre"),
            'rol_id'   => 3
        ]);
    }
}
