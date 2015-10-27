<?php

use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name'       => "Barth",
            "last_name"  => "Simpson",
            'document'   => "12345",
            "address"    => "siempre viva",
            "telephone"  => "8847696",
            "mobile"     => "3215353548",
            "date_born"  => "1996-12-07",
            "email"      => "io@barth.me",
        ]);
    }
}
