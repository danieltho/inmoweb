<?php

Route::get('/','DanielSann\InmoWeb\Controllers\Web\IndexController@index' );
Route::get('/propiedades')->uses('DanielSann\InmoWeb\Controllers\Web\PropiedadesController@index');
Route::get('/desarrollos')->uses('DanielSann\InmoWeb\Controllers\Web\DesarrollosController@index');
Route::get('/propiedad/{slug}_{id}')->uses('DanielSann\InmoWeb\Controllers\Web\PropiedadesController@show');
Route::get('/desarrollo/{slug}_{id}')->uses('DanielSann\InmoWeb\Controllers\Web\DesarrollosController@show');
Route::get('/empresa')->uses('DanielSann\InmoWeb\Controllers\Web\EmpresaController@index');
Route::get('/contacto')->uses('DanielSann\InmoWeb\Controllers\Web\ContactoController@index');



Route::prefix('admin')->group(function (){

    Route::get('/login')->uses('DanielSann\InmoWeb\Controllers\Administrator\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login')->uses('DanielSann\InmoWeb\Controllers\Administrator\Auth\LoginController@login');


        Route::get('/escritorio')->uses('DanielSann\InmoWeb\Controllers\Administrator\IndexController@index');
        Route::resource('/propiedades', 'DanielSann\InmoWeb\Controllers\Administrator\PropiedadeController');
        Route::delete('/propiedad/medio/{id}', 'DanielSann\InmoWeb\Controllers\Administrator\MediosPropiedadesController@destroy');
        Route::resource('/medios', 'DanielSann\InmoWeb\Controllers\Administrator\MediosController');
        Route::resource('/monedas', 'DanielSann\InmoWeb\Controllers\Administrator\MonedaController');
        Route::resource('/estados', 'DanielSann\InmoWeb\Controllers\Administrator\EstadoController');
        Route::resource('/tipos', 'DanielSann\InmoWeb\Controllers\Administrator\TipoController');
        Route::resource('/categorias', 'DanielSann\InmoWeb\Controllers\Administrator\CategoriaController');
        Route::resource('/desarrollos', 'DanielSann\InmoWeb\Controllers\Administrator\DesarrollosController');
        Route::get('/contacto')->uses('DanielSann\InmoWeb\Controllers\Administrator\IndexController@index');


});
