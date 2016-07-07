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

Route::get('/', function () {
    return view('pg_principal');
});

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
	
Route::match(['get', 'post'],'reservaciones/buscarObra', [
		'as' => 'reservaciones.buscarObra', 
		'uses' => 'ReservarDonarController@buscarObra'
]);
Route::get('reservaciones/reservar/{isbn}', [
		'as' => 'reservaciones.reservar',
		'uses' => 'ReservarDonarController@reservar'
]);
Route::match(['get', 'post'],'cliente/buscarCliente', [
		'as' => 'cliente.buscarCliente',
		'uses' => 'PerClienteController@buscarCliente'
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
Route::resource('login','loginController');
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
