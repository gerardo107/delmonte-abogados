<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Aqui es dodnde se tienen que registrar todas las rutas para tu aplicacion
| las que se encuntran dentro de 'group' son las que necesitas estar login 
| para poder ingresar.
|
*/

Route::get('/',[
    'as' => 'index',
    'uses' => 'PagesController@getIndex'
]);
Route::get('nosotros', [
    'as' => 'nosotros', 
    'uses' => 'PagesController@getNosotros',
]);




Route::group(['middleware' => 'web'], function () {
    Route::auth();
    Route::get('/home', 'HomeController@index');
    Route::resource('clientesSys','ClienteController');
    Route::resource('juntasSys','JuntaController');
    Route::resource('contactosSys','ContactoController');
    Route::get('contacto', [
    'as' => 'contacto', 
    'uses' => 'PagesController@getContacto',
    ]);  

});