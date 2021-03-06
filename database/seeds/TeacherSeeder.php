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
        DB::table('teachers')->insert([
            'name'       => "Homero",
            "last_name"  => "Simpson",
            'document'   => "7890123",
            "address"    => "siempre viva",
            "telephone"  => "8847696",
            "mobile"     => "3215353548",
            "date_born"  => "1986-08-12",
            "email"      => "io@homero.me",
        ]);
    }
}
