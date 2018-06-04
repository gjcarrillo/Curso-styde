<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {

    if (request()->has('empty')){
        $users = [];
    }else{
      $users = [
        'Joel','Gerardo','Jose','Rafael','Marck','Eliza','Ana','<script>alert("Clicker")</script>',
    ];
    }

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
