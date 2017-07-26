<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('login',['as'=>'login',function(){
    return view('auth.login');
}]);

Route::post('login',['as'=>'login','uses'=>'Auth\LoginController@login']);
Route::get('logout',['as'=>'logout','uses'=>'Auth\LoginController@logout']);



route::group(['middleware'=>['auth']], function(){

Route::get('/', function () {return view('plantilla');
});


Route::get('bienvenido', ['as'=>'bienvenido', 'uses'=>'PaginaController@bienvenido']);

/*TRABAJADOR*/

Route::get('persona/crear', ['as'=>'persona.crear', 'uses'=>'PersonaController@crear']);

Route::post('persona/grabar', ['as'=>'persona.grabar', 'uses'=>'PersonaController@grabar']);

Route::get('persona/lista', ['as'=>'persona.listar', 'uses'=>'PersonaController@listar']);

Route::get('persona/modificar/{id}', ['as'=>'persona.modificar', 'uses'=>'PersonaController@modificar']);

Route::post('persona/actualizar/{id}', ['as'=>'persona.actualizar', 'uses'=>'PersonaController@actualizar']);

Route::get('persona/detallar/{id}', ['as'=>'persona.detallar', 'uses'=>'PersonaController@detallar']);

Route::get('persona/eliminar/{id}', ['as'=>'persona.eliminar', 'uses'=>'PersonaController@eliminar']);

/*DISTRITO*/

Route::get('distrito/crear', ['as'=>'distrito.crear', 'uses'=>'DistritoController@crear']);

Route::post('distrito/grabar', ['as'=>'distrito.grabar', 'uses'=>'DistritoController@grabar']);

Route::get('distrito/lista', ['as'=>'distrito.listar', 'uses'=>'DistritoController@listar']);

Route::get('distrito/modificar/{id}', ['as'=>'distrito.modificar', 'uses'=>'DistritoController@modificar']);

Route::post('distrito/actualizar/{id}', ['as'=>'distrito.actualizar', 'uses'=>'DistritoController@actualizar']);

Route::get('distrito/detallar/{id}', ['as'=>'distrito.detallar', 'uses'=>'DistritoController@detallar']);

Route::get('distrito/eliminar/{id}', ['as'=>'distrito.eliminar', 'uses'=>'DistritoController@eliminar']);


/*ACTIVOS*/

Route::get('activo/crear', ['as'=>'activo.crear', 'uses'=>'ActivoController@crear']);

Route::post('activo/grabar', ['as'=>'activo.grabar', 'uses'=>'ActivoController@grabar']);

Route::get('activo/listar', ['as'=>'activo.listar', 'uses'=>'ActivoController@listar']);

Route::get('activo/eliminar/{id}', ['as'=>'activo.eliminar', 'uses'=>'ActivoController@eliminar']);

Route::get('activo/detallar/{id}', ['as'=>'activo.detallar', 'uses'=>'ActivoController@detallar']);

Route::get('activo/modificar/{id}', ['as'=>'activo.modificar', 'uses'=>'ActivoController@modificar']);

Route::post('activo/actualizar/{id}', ['as'=>'activo.actualizar', 'uses'=>'ActivoController@actualizar']);

Route::post('activo/buscar', ['as'=>'activo.buscar', 'uses'=>'ActivoController@buscar']);

Route::get('activo/compact', ['as'=>'activo.compact', 'uses'=>'ActivoController@compact']);



    /*COMPLEMENTOS DEL ACTIVO*/




/*CATEGORIA*/

Route::get('categoria/crear', ['as'=>'categoria.crear', 'uses'=>'CategoriaController@crear']);

Route::post('categoria/grabar', ['as'=>'categoria.grabar', 'uses'=>'CategoriaController@grabar']);

Route::get('categoria/listar', ['as'=>'categoria.listar', 'uses'=>'CategoriaController@listar']);

Route::get('categoria/eliminar/{id}', ['as'=>'categoria.eliminar', 'uses'=>'CategoriaController@eliminar']);

Route::get('categoria/detallar/{id}', ['as'=>'categoria.detallar', 'uses'=>'CategoriaController@detallar']);

Route::get('categoria/modificar/{id}', ['as'=>'categoria.modificar', 'uses'=>'CategoriaController@modificar']);

Route::post('categoria/actualizar/{id}', ['as'=>'categoria.actualizar', 'uses'=>'CategoriaController@actualizar']);



/*SALIDA DE ACTIVOS*/



Route::get('salidactivos/crear', ['as'=>'salidactivos.crear', 'uses'=>'SalidaActivoController@crear']);


/*OFICINA*/

Route::get('oficina/crear', ['as'=>'oficina.crear', 'uses'=>'OficinaController@crear']);

Route::post('oficina/grabar', ['as'=>'oficina.grabar', 'uses'=>'OficinaController@grabar']);

Route::get('oficina/listar', ['as'=>'oficina.listar', 'uses'=>'OficinaController@listar']);

Route::get('oficina/modificar/{id}', ['as'=>'oficina.modificar', 'uses'=>'OficinaController@modificar']);

Route::post('oficina/actualizar/{id}', ['as'=>'oficina.actualizar', 'uses'=>'OficinaController@actualizar']);

Route::get('oficina/eliminar/{id}', ['as'=>'oficina.eliminar', 'uses'=>'OficinaController@eliminar']);

Route::get('oficina/detallar/{id}', ['as'=>'oficina.detallar', 'uses'=>'OficinaController@detallar']);



/*UNIDAD*/

Route::get('unidad/crear', ['as'=>'unidad.crear', 'uses'=>'UnidadController@crear']);

Route::post('unidad/grabar', ['as'=>'unidad.grabar', 'uses'=>'UnidadController@grabar']);

Route::get('unidad/listar', ['as'=>'unidad.listar', 'uses'=>'UnidadController@listar']);

Route::get('unidad/modificar/{id}', ['as'=>'unidad.modificar', 'uses'=>'UnidadController@modificar']);

Route::post('unidad/actualizar/{id}', ['as'=>'unidad.actualizar', 'uses'=>'UnidadController@actualizar']);

Route::get('unidad/eliminar/{id}', ['as'=>'unidad.eliminar', 'uses'=>'UnidadController@eliminar']);

Route::get('unidad/detallar/{id}', ['as'=>'unidad.detallar', 'uses'=>'UnidadController@detallar']);

/*MARCA*/

Route::get('marca/crear', ['as'=>'marca.crear', 'uses'=>'MarcaController@crear']);

Route::post('marca/grabar', ['as'=>'marca.grabar', 'uses'=>'MarcaController@grabar']);

Route::get('marca/listar', ['as'=>'marca.listar', 'uses'=>'MarcaController@listar']);

Route::get('marca/modificar/{id}', ['as'=>'marca.modificar', 'uses'=>'MarcaController@modificar']);

Route::post('marca/actualizar/{id}', ['as'=>'marca.actualizar', 'uses'=>'MarcaController@actualizar']);

Route::get('marca/eliminar/{id}', ['as'=>'marca.eliminar', 'uses'=>'MarcaController@eliminar']);

Route::get('marca/detallar/{id}', ['as'=>'marca.detallar', 'uses'=>'MarcaController@detallar']);

/*DOCUEMENTO*/

Route::get('documento/crear', ['as'=>'documento.crear', 'uses'=>'documentoController@crear']);

Route::post('documento/grabar', ['as'=>'documento.grabar', 'uses'=>'documentoController@grabar']);

Route::get('documento/listar', ['as'=>'documento.listar', 'uses'=>'documentoController@listar']);

Route::get('documento/modificar/{id}', ['as'=>'documento.modificar', 'uses'=>'documentoController@modificar']);

Route::post('documento/actualizar/{id}', ['as'=>'documento.actualizar', 'uses'=>'documentoController@actualizar']);

Route::get('documento/eliminar/{id}', ['as'=>'documento.eliminar', 'uses'=>'documentoController@eliminar']);

Route::get('documento/detallar/{id}', ['as'=>'documento.detallar', 'uses'=>'documentoController@detallar']);







});