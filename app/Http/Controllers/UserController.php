<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public function index()
  {
    $users = [
      'Joel',
      'Gerardo',
      'Jose',
      'Rafael',
      'Marck',
      'Eliza',
      'Ana',
      '<script>alert("Clicker")</script>'
    ];

    return view('users', [
      'users' => $users,
      'title' => 'Listado de usuarios'
    ]); //users.php
  }

  public function show($id)
  {
      return "Mostrando detalles del usuario: {$id}";
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
