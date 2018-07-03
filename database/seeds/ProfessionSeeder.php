<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      //*CONSULTAS SQL PURA PERO NO SEGURA PARA ATAQUES*/
      //DB::insert('INSERT INTO professions (title) VALUES (?)', ['Desarrollador Back-end']);

      //*CONSULTAS SQL PURA PERO NO SEGURA PARA ATAQUES*/
      // DB::insert('INSERT INTO professions (title) VALUES (:title)', [
      //   'title' => 'Desarrollador Back-end']);

        //*CONSTRUCTOR DE CONSULTAS SQL DE LARAVEL*/
        DB::table('professions')->insert([
            'title' => 'Desarrollador Back-end',
        ]);
        DB::table('professions')->insert([
            'title' => 'Desarrollador Front-end',
        ]);
        DB::table('professions')->insert([
            'title' => 'Diseñador Web',
        ]);
    }
}
