<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notas')->insert([
            'id_nota'=> '1',
            'nota1'=> '7.3',
            'nota2'=> '8.8',
            'nota3'=> '7',
            'nota4'=> '9',
            'promedio'=> '8.8',
            'parcial'=> '9.0',
            'id_alumno'=> '1',
            'id_cursos'=> '1',
            'id_profesor'=> '1'
        ]);
    }
}
