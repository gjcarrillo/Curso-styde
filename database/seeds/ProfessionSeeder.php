<?php

use App\Profession;

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
        // DB::table('professions')->insert([
        //   'title' => 'Desarrollador Back-end',
        // ]);
        // DB::table('professions')->insert([
        //     'title' => 'Desarrollador Front-end',
        // ]);
        // DB::table('professions')->insert([
        //     'title' => 'Diseñador Web',
        // ]);


        // otra forma de crear una profesion trabajando con Modelos
        //MODELO DE ELOQUENT

        Profession::create([
          'title' => 'Desarrollador Back-end',
        ]);
        Profession::create([
          'title' => 'Desarrollador Front-end',
        ]);
        Profession::create([
          'title' => 'Diseñador Web',
        ]);
    }
}
