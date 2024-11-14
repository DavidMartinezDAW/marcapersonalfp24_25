<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function() {
    return 'Login usuario';
});

Route::get('logout', function() {
    return 'Logout usuario';
});

Route::get('proyectos', function() {
    return 'Listado proyectos';
});

Route::get('proyectos/show/{id}', function($id) {
    return 'Vista detalle proyecto ' . $id;
})->where('id', '[0-9]+');

Route::get('proyectos/create', function() {
    return 'Añadir proyecto';
});

Route::get('proyectos/edit/{id}', function($id) {
    return 'Modificar proyecto ' . $id;
})->where('id', '[0-9]+');

Route::get('perfil/{id?}', function($id = null) {
    return $id ? 'Visualizar el currículo de '. $id : 'Visualizar el currículo propio';
})->where('id', '[0-9]*');
