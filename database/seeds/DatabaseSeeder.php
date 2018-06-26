<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /*ESTA FUNCION VACIA LAS TABLA INDICADAS PARA LUEGO EJECUTAR*/
        $this->truncatetables([
          'users',
          'professions'
        ]);

        // $this->call(UsersTableSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(UserSeeder::class);
    }

    protected function truncatetables(array $tables)
    {
      /*REVISION DE CLAVES FORANEAS DESACTIVADAS*/
      DB::statement('SET FOREIGN_KEY_CHECKS = 0;');

          foreach ($tables as $table) {
            /*ORDEN DE VACIAR TABLA DE REVISIONES DINAMICA TABLE*/
            DB::table($table)->truncate();
          }

      /*REVISION DE CLAVES FORANEAS ACTIVDAS*/
      DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
