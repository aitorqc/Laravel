<?php

use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/prueba/{id?}',function($id=null){
	return "Estamos en pruebas ".$id;
});

Route::get('/users',function(){
	return view('usuarios');
});

Route::get('/probemos',function(){
	return view('prueba',['nombre'=>'Sergio','apellido'=>'Benavides']);
});

Route::get('/hi/{nombre?}','HomeController@inicio');

Route::get('usuarios',function(){
	$user=User::create(['name'=>'pepe','email'=>'sergiño@tucaretera','password'=>'123']);
	$user->save();
	return $user;
});

Route::get('/home',function(){
	return view('home');
});

Route::get('login',['uses'=>function(){
	return view('login');
},
'as'=>'inicio']);

Route::get('/users','UserController@index');

Route::get('/posts','PostController@index');

Route::get('posts',[
	'uses'=>'PostController@index',
	'as' => 'inicao'
	]);

Route::get('logout','UserController@logout');
 // metodos post
Route::post('nuevoUsuario', 'UserController@create');

Route::post('login','UserController@login');