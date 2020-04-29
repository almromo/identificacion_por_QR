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
})->name('home');

Auth::routes();


Route::group(['middleware' => 'auth', 'prefix' => '/admin'],function(){

  Route::get('/',function(){
    return view('admin.index');
  })->middleware('password.confirm');


  Route::resources([
      'alumno' => 'AlumnoController',
      'equipo' => 'EquipoController'
  ]);
  Route::get('/busqueda','BuscadorController@buscar');

  /*Route::prefix('/alumno')->group(function(){

    //Rutas correspondientes a la creacion de usuario
    Route::get('/crear', function(){
      return view('alumnos.crear');
    });
    Route::post('/creado', 'AlumnoController@store');


    //Rutas correspondientes a la asignación de equipo para usuarios
    Route::get('/asignar_equipo', function(){
      return view('alumnos.asignar_equipo');
    });
    Route::post('/crear_equipo','AlumnoController@verAlumnoEquipo');
    Route::get('/equipo_asignado/{id_alumno}', 'EquipoController@store');

    //

    //Rutas correspondientes a la asignación de vehiculos para alumnos


    //Rutas correspondientes a la gestion de alumnos
    Route::post('/busqueda', 'AlumnoController@buscar');

    Route::get('/gestionar', function(){
      return view('alumnos.gestionar');
    });

    Route::get('/ver', 'AlumnoController@verAlumno');

  });*/




});
