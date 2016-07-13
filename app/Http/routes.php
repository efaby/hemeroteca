<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
		return view('pg_principal');
	});
	
Route::get('logout', [
		'as' => 'logout',
		'uses' => 'SeguridadController@logOut'
]);
	
Route::get('login', function () {
		return view('pg_principal');
	});

Route::post('postLogin', [
		'as' => 'seguridad.postLogin',
		'uses' => 'SeguridadController@postLogin'
]);	
Route::match(['get', 'post'],'reservaciones/devolucion', [
		'as' => 'reservaciones.devolucionObra',
		'uses' => 'ReservarDonarController@devolucionObra',
		'middleware' => 'auth'
]);
Route::post('reservaciones/devolucion/devolver', [
		'as' => 'reservaciones.devolverObra',
		'uses' => 'ReservarDonarController@devolverObra',
		'middleware' => 'auth'
]);
Route::match(['get', 'post'],'reservaciones/{opcion}', [
		'as' => 'reservaciones.buscarObra', 
		'uses' => 'ReservarDonarController@buscarObra',	
]);
Route::post('reservaciones/prestacion/{obra}', [
		'as' => 'reservaciones.prestacion',
		'uses' => 'ReservarDonarController@prestacion',
		'middleware' => 'auth'
]);
Route::post('reservaciones/donacion/{obra}', [
		'as' => 'reservaciones.donacion',
		'uses' => 'ReservarDonarController@donacion',
		'middleware' => 'auth'
]);

Route::match(['get', 'post'],'cliente/buscarCliente', [
		'as' => 'cliente.buscarCliente',
		'uses' => 'PerClienteController@buscarCliente',
		'middleware' => 'auth'
]);
Route::get('reservaciones/obra/{id}', [
		'as' => 'reservaciones.verObra',
		'uses' => 'ReservarDonarController@mostrarObra',
		'middleware' => 'auth'
]);

Route::match(['get', 'post'],'reporte/obras', [
		'as' => 'reporte.obras',
		'uses' => 'PdfController@buscarObras',
]);

Route::post('reporte/exportar', [
		'as' => 'reporte.obrasExportar',
		'uses' => 'PdfController@exportarObras',
]);

Route::get('descargaPdfClientes/{tipo}','PdfController@descargaPdfClientes');	
Route::get('vistaPdfClientes/{tipo}','PdfController@vistaPdfClientes');	

Route::get('verArea','ObrasRegistroController@verarea');
Route::get('verTipoRegistro','ObrasRegistroController@verregistro');
Route::get('verTipoObra','ObrasRegistroController@verobra');
Route::get('verProveedor','ObrasRegistroController@verproveedor');
Route::get('verisbn','IsbnController@verIsbn');
Route::get('vercliente','ReservarDonarController@vercliente');
Route::get('vistaPrevia','ReservarDonarController@vistaPrevia');



Route::group(['middleware' => 'auth'], function()
{
		//Route::resource('todo', 'TodoController', ['only' => ['index']]);
	Route::resource('principal','administracionController');
	Route::resource('tipoUsuario','CatTipoUsuarioController');
	Route::resource('tipoObra','CatTipoObrasController');
	Route::resource('area','CatAreasController');
	Route::resource('estado','CatEstadoHistorialController');
	Route::resource('tipoRegistro','CatTipoRegistroController');
	Route::resource('proveedor','PerProveedorController');
	Route::resource('usuario','PerUsuarioController');
	Route::resource('cliente','PerClienteController');
	Route::resource('reservaciones','ReservarDonarController');
	Route::resource('obrasRegistros','ObrasRegistroController');
	Route::resource('isbn','IsbnController');
	Route::resource('reportes','PdfController');
});



});
