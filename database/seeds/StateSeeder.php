<?php

use Illuminate\Database\Seeder;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            'name_state'        => "Activo",
            'description_state' => "Estado Activo",
        ]);
    }
}
