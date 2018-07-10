<?php
use App\User;
use App\Profession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //*CONSULTAS SQL PURA PERO NO SEGURA PARA ATAQUES*/
        // $professions = DB::select('SELECT id FROM professions WHERE
        //   title = "Desarrollador Back-end"');

        //*CONSULTAS SQL PURA usando marcador ?  PARA evitar ATAQUES*/
        // $professions = DB::select('SELECT id FROM professions WHERE
        //    title = ? LIMIT 0,1',['Desarrollador Back-end']);


        //*CONSTRUCTOR DE CONSULTAS SQL DE LARAVEL*/
        //take(1) para obtener un solo resultado
        //esta consulta arroja un listado de resultados

        //$professions= DB::table('professions')->select('id')->take(1)->get();

        //para consultar un solo resultado del listado
        // $profession= DB::table('professions')->select('id')->first();
        // $profession= DB::table('professions')->select('id','title')->where('title','=','Desarrollador Back-end')->first();

        //otra forma sin select
        //para trabajar sin un objeto sino con el id directamente
        // $professionId= DB::table('professions')
        // ->where('title', 'Desarrollador Back-end')
        // ->value('id');

        ////MODELO DE ELOQUENT
        $professionId= Profession::
        where('title', 'Desarrollador Back-end')->value('id');

        //para consultar la impresion
        // dd($profession); //equivalente a $professions[0]
        //*CONSTRUCTOR DE CONSULTAS SQL DE LARAVEL*/
        // DB::table('users')->insert([
        //     'name'=> 'Gerardo Carrillo',
        //     'email'=> 'Gcarrilloservice@gmail.com',
        //     'password'=> bcrypt('laravel'),
        //     'profession_id'=> $professionId,
        // ]);

        ////MODELO DE ELOQUENT

        User::create([
            'name'=> 'Gerardo Carrillo',
            'email'=> 'Gcarrilloservice@gmail.com',
            'password'=> bcrypt('laravel'),
            'profession_id'=> $professionId,
        ]);
    }
}
