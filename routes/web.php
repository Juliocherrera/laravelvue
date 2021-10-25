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
Route::post('/administracion/usuario/setCambiarEstadoUsuario', 'App\Http\Controllers\Administracion\UsersController@setCambiarEstadoUsuario');
Route::post('/administracion/usuario/setEditarRolByUsuario', 'App\Http\Controllers\Administracion\UsersController@setEditarRolByUsuario');
Route::get('/administracion/usuario/getRolByUsuario', 'App\Http\Controllers\Administracion\UsersController@getRolByUsuario');

Route::get('/administracion/rol/getListarRoles', 'App\Http\Controllers\Administracion\RolesController@getListarRoles');
Route::get('/administracion/rol/getListarPermisosByRol', 'App\Http\Controllers\Administracion\RolesController@getListarPermisosByRol');
Route::post('/administracion/rol/setRegistrarRolPermisos', 'App\Http\Controllers\Administracion\RolesController@setRegistrarRolPermisos');
Route::post('/administracion/rol/setEditarRolPermisos', 'App\Http\Controllers\Administracion\RolesController@setEditarRolPermisos');

Route::get('/administracion/permiso/getListarPermisos', 'App\Http\Controllers\Administracion\PermissionController@getListarPermisos');
Route::post('/administracion/permiso/setRegistrarPermiso', 'App\Http\Controllers\Administracion\PermissionController@setRegistrarPermiso');
Route::post('/administracion/permiso/setEditarPermiso', 'App\Http\Controllers\Administracion\PermissionController@setEditarPermiso');

Route::post('/archivo/setRegistrarArchivo', 'App\Http\Controllers\FilesController@setRegistrarArchivo');
Route::get('/{optional?}', function () {
    return view('app');
})->name('basepath')
  ->where('optional', '.*');


