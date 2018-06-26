<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id',255);  //INTEGER UNSIGNED - AUTOINCREMENT
            $table->string('name',255);  // VARCHAR
            $table->string('email')->unique();  // VARCHAR - UNIQUE
            $table->string('password');  // VARCHAR
            $table->rememberToken();  // METODO HELPER
            $table->timestamps();  // METODO HELPER
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
