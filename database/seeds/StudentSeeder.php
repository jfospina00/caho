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
            'name'      => "Homero",
            "last_name" => "Simsomp"
            "address"   => "Simsomp"
            "telephone",=>"Simsomp"
            "date_born" => "Simsomp"
            "email"     => "Simsomp"
        ]);
    }
}
