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

Route::view('/home', 'home');

Route::get('/categorias', 'TestController@selectCategorias');
Route::get('/tipos', 'TestController@selectTipoContenido');
Route::get('/contenidos', 'TestController@selectContenido');


//Rutas de Contenidos
Route::post('Api/Crear', 'ContenidosController@Crear');
Route::put('Api/Editar/{id}', 'ContenidosController@Editar');
Route::put('Api/Calificar/{id}', 'ContenidosController@Calificar');
Route::delete('Api/Eliminar/{idcontenido}', 'ContenidosController@Eliminar');
Route::get('Api/ListarCategoria/{id}', 'ContenidosController@ListarCategoria');
Route::get('Api/ListarNombre/{nombre}', 'ContenidosController@ListarNombre');
Route::get('Api/ListarRecientes', 'ContenidosController@ListarRecientes');
Route::get('Api/MejorCalificacion', 'ContenidosController@ListarCalificada');



