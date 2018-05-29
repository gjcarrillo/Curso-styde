<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeUserController extends Controller
{

  public function index($name, $nickname = null)
  {
    $name=ucfirst($name);
      if($nickname){
        return "Bienvenido {$name}, tu apodo es {$nickname} Ex:Doble index";
      }else{
          return "Bienvenido {$name} ...No tienes apodo Ex:Doble index";
      }
   }

  public function index1($name='Gerardo',$nickname = 'g3r4rd2')
  {
        return "Bienvenido {$name}, tu apodo es {$nickname} Ex:Doble index1";
  }

  public function index2($name='Gerardo',$nickname = 'Default')
    {
          return "Bienvenido $name,tu apodo es {$nickname}  index2";
    }






}
