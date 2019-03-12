<?php
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
});
Route::group(['middleware' => 'auth'], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/findcliente', 'ClientesController@find');
    Route::get('/clientes', 'ClientesController@index');
    Route::get('/clienteBuscado/{id}', 'ClientesController@index2');
    Route::get('/trabajos', 'TrabajosController@index');
    Route::get('/especies', 'EspeciesController@index');
    Route::get('/productos', 'ProductosController@index');
    Route::get('/listados', 'ListadosController@index');
    Route::get('/serviciosCliente/{id}', 'TrabajosController@serviciosCliente')->name('serviciosCliente');
    Route::get('/verServicio/{servicio}', 'TrabajosController@verServicio')->name('verServicio');
    
    Route::post('/buscarListado', 'ListadosController@buscar');

    Route::get('/pegatina/{id}/{fecha}/{servicio}', 'TrabajosController@pegatina');

    Route::post('creatingJob', 'TrabajosController@creating');

    Route::get('editcliente/{id}', 'ClientesController@edit')->name('editcliente');
    Route::get('editespecie/{id}', 'EspeciesController@edit');
    Route::get('editproducto/{id}', 'ProductosController@edit');

    Route::post('editcliente/{id}', 'ClientesController@update');
    Route::post('editespecie/{id}', 'EspeciesController@update');
    Route::post('editproducto/{id}', 'ProductosController@update');

    Route::get('addcliente', 'ClientesController@create')->name('addcliente');
    Route::get('addespecie', 'EspeciesController@create')->name('addEspecie');
    Route::get('addproducto', 'ProductosController@create')->name('addProducto');

    Route::post('addclientes', 'ClientesController@store');
    Route::post('addespecies', 'EspeciesController@store');
    Route::post('addproducto', 'ProductosController@store');
    Route::post('addPegatina', 'PegatinasController@store')->name('addPegatina');


    Route::get('pdfListado/{mes}/{ano}', 'ListadosController@pdf')->name('pdfListado');
    Route::get('pdfPegatina/{pegatina}', 'PegatinasController@pdf')->name('pdfPegatina');

});
Auth::routes();


