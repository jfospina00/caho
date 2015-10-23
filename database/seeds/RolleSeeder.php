<?php

use Illuminate\Database\Seeder;

class RolleSeeder extends Seeder
{

    public function run()
    {
        DB::table('rolles')->insert([
            'name_role' => "Estudiante",
        ]);
        DB::table('rolles')->insert([
            'name_role' => "Docente",
        ]);
        DB::table('rolles')->insert([
            'name_role' => "Padre de Familia",
        ]);
    }
}
