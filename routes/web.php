<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/administracion/usuario/getListarUsuarios', 'App\Http\Controllers\Administracion\UsersController@getListarUsuarios');
Route::post('/administracion/usuario/setRegistrarUsuario', 'App\Http\Controllers\Administracion\UsersController@setRegistrarUsuario');
Route::post('/administracion/usuario/setEditarUsuario', 'App\Http\Controllers\Administracion\UsersController@setEditarUsuario');

Route::post('/archivo/setRegistrarArchivo', 'App\Http\Controllers\FilesController@setRegistrarArchivo');

Route::get('/{optional?}', function () {
    return view('app');
})->name('basepath')
  ->where('optional', '.*');


