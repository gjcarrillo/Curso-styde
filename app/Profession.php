<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //

    public $timestamps = true;

    protected $fillable = ['title'];

    public function users(){

        return $this->hasMany(User::class);
    }
}
