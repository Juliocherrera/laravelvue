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
Route::get('/{optional?}', function () {
    return view('app');
})->name('basepath')
  ->where('optional', '.*');


