<?php


Route::get('/', function () {
    return view('Inicio.layaut');
});

Route ::group(["middleware"=>['auth']],function() {

    Route::group(["middleware" => ['userverify']], function ()
    {
        Route::resources([

            'dispositivos' => 'DispositivosController',
            'animales' => 'AnimalesController',
            'tganado' => 'TganadoController',
        ]);

    });
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');