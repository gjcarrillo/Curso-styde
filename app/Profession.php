<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    /*Si quiero ejecutar los seeder y
    los campos stamp no existen*/

    // public $timestamps = false;

    protected $fillable = ['title'];
}
