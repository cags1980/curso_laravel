<?php

/*
Route::get('/{any}', function () {
return view('post');
})->where('any', '.*');
 */

Route::get('/', function () {
    return 'home';
});
Route::get('/usuarios','UserController@index');

/* Route::get('/usuarios', function () {
    return 'Usuarios';
}); */


Route::get('/usuarios/{id}','UserController@show')
->where('id', '[0-9]+');
/* 
Route::get('/usuarios/{id}', function ($id) {
    return "Mostrando detalle del usuario: {$id}";
})->where('id', '[0-9]+'); */
Route::get('usuarios/nuevo','UserController@create');

/* Route::get('/usuarios/nuevo', function () {
    return 'Crear nuevo usuario';
}); */

Route::get('/saludo/{name}/{nickname?}', 'WellcomeUserController');
/* 


Route::get('/saludo/{name}/{nickname?}', function ($name, $nickname = null) {
    $name = ucfirst($name);
    if ($nickname) {
        return "Bienvenido {$name}, tu apodo es {$nickname}";
    } else {
        return "Bienvenido {$name}";
    }
}); */
