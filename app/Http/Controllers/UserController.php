<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UserController extends Controller
{
  public function index()
  {

    //$users=DB::table('users')->get();

    if (request()->has('empty')){
        $users = [];
    }else{
    

    //Eloquent
    $users = User::all();

    }
      // dd($users);

      //Listados de Usuarios estatico

      // $users = [
      //   // 'Joel','Gerardo','Jose','Rafael','Marck','Eliza','Ana','<script>alert("Clicker")</script>',
      //   'Joel','Gerardo','Jose','Rafael','Marck','Eliza','Ana',
      // ];



    //FORMA 1
    /*
    return view('users', [
      'users' => $users,
      'title' => 'Listado de usuarios'
    ]); //users.php*/

    //FORMA 2
    /*
      return view('users')
        ->with('users', $users)
        ->with('title', 'Listado de usuarios');

      //users.php*/

    //FORMA 3
    /*
    $title = 'Listado de usuarios';
    return view('users', [
      'users' => $users,
      'title' => $title
    ]);
    */

    //FORMA 4

    $title = 'Listado de usuarios Prueba';
    // FUNCION  DD PARA PROBAR COMPACT SIMILAR A VARDUMP Y DIE
    //dd(compact('title','users'));

    //OTRA LLAMADA ALTERNATIVA

    // return view('users.index')
    // ->with('users', User::all())
    // ->with('title', 'Listado de usuarios Prueba');

    //COMPACT DEVUELVE Y ARRAY ASOCIATIVO
    return view('users.index', compact('title','users'));

  }

  public function show($id)
  {
      return view('users.show', compact('id'));
  }

  public function create()
  {
    return 'Crear Nuevo Usuario';
  }

  public function edit($id2 = null)
  {
      return "Editar Usuario: {$id2}";
  }
}
