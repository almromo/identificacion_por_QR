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

Route::get('/', function () {
    return view('auth.login');
})->name('inicio')->middleware('isLogged');

Route::get('/home', function(){
  return view('index');
})->name('home')->middleware('auth');

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix' => '/admin'],function(){

  Route::get('/',function(){
    return view('admin.index');
  })->middleware('password.confirm')->name('admin.index');

  Route::get('/busqueda','BuscadorController@buscar');

  Route::resources([
      'alumno' => 'AlumnoController',
      'equipo' => 'EquipoController',
      'vehiculo' => 'VehiculoController'
  ]);

  Route::get('buscar/alumno','GestionadorAlumnosController@index')->name('gestion.alumno');
  Route::post('gestion/alumno/ver','AlumnoController@search')->name('ga.ver');


});
