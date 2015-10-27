<?php

use Illuminate\Database\Seeder;

class FatherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fathers')->insert([
            'name'       => "marge",
            "last_name"  => "Simpson",
            'document'   => "45678",
            "address"    => "siempre viva",
            "telephone"  => "8847696",
            "mobile"     => "3215353548",
            "date_born"  => "1987-02-12",
            "email"      => "io@marge.me",
            "user_id"    => "303453463",
           ]);
        
    }
}
