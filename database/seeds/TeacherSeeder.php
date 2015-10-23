<?php

use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'       => "Homero",
            "last_name"  => "Simsomp",
            "address"    => "siempre viva",
            "telephone"  =>"8847696",
            "date_born"  => "3215353548",
            "email"      => "io@homero.me",
        ]);
    }
}
