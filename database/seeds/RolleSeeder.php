<?php

use Illuminate\Database\Seeder;

class RolleSeeder extends Seeder
{

    public function run()
    {
        DB::table('rolles')->insert([
            'name_roll' => "Estudiante",
        ]);
        DB::table('rolles')->insert([
            'name_roll' => "Docente",
        ]);
        DB::table('rolles')->insert([
            'name_roll' => "Padre de Familia",
        ]);
    }
}
