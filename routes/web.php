<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', function() {
    return 'Home';
});

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/usuarios', function() {
//     return 'Usuarios';
// });

Route::get('/usuarios', 'UserController@index');

Route::get('/usuarios/{id}', 'UserController@show')
->where ('id', '[0-9]+');
/*Validacion de esta regla acepte solo numeros*/
/*  [0-9]+" esta expresion o esta "\d+"   */

Route::get('/usuarios/nuevo', 'UserController@create');
//
// Route::get('/saludo/gerardo/g3r4rd2', function(){
//     return 'WelcomeUserController';
// });
//
// Route::get('/saludo/nickname', function(){
//     return 'WelcomeUserController2';
// });
Route::get('/saludo/name', 'WelcomeUserController@index1');

Route::get('/saludo/nickname', 'WelcomeUserController@index2');

Route::get('/saludo/{name}/{nickname?}', 'WelcomeUserController@index');

Route::get('/usuarios/{id2?}/edit', 'UserController@edit')
->where ('id2', '[0-9]+'); /*? quiere decir que el valor es opcional*/
