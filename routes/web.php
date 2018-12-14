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

    Route::get('/pegatina/{id}/{fecha}', 'TrabajosController@pegatina');

    Route::post('creatingJob', 'TrabajosController@creating');

    Route::get('editcliente/{id}', 'ClientesController@edit');
    Route::get('editespecie/{id}', 'EspeciesController@edit');
    Route::get('editproducto/{id}', 'ProductosController@edit');

    Route::post('editcliente/{id}', 'ClientesController@update');
    Route::post('editespecie/{id}', 'EspeciesController@update');
    Route::post('editproducto/{id}', 'ProductosController@update');

    Route::get('addcliente', 'ClientesController@create');
    Route::get('addespecie', 'EspeciesController@create');
    Route::get('addproducto', 'ProductosController@create');

    Route::post('addclientes', 'ClientesController@store');
    Route::post('addespecies', 'EspeciesController@store');
    Route::post('addproducto', 'ProductosController@store');

    Route::get('pdf/{type}/{from}/{to}/{grade}/{typegrade}', 'TrabajosController@pdfs')->name('pdf');
});
Auth::routes();


