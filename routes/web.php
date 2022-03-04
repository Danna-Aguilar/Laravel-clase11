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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function(){
    $notas = [
      /*'Primera Nota',
        'Segunda Nota',
        'Tercera Nota',
        'Cuarta Nota', */
    ];
    return view('notas', ['notas' => $notas]);
})->name('listar');

Route::get('notas/{id}', function ($id) {
    return 'Aquí veremos el detalle de la nota: '.$id;
});

Route::get('agregar', function () {
    return view('agregar');
})->name('nuevanota');

Route::get('editar', function () {
    return view('editar');
});


#Asignación de clase 21-01-22
#Crear 5 rutas en el archivo web.php
#1
Route::get('IniciarSesion', function(){
    return 'Se presenta la vista para que el cliente puede entrar a su cuenta.';
});
#2
Route::get('Registro', function(){
    return 'Aquí el cliente puede registrarse.';
});
#3
Route::get('SobreNosotros', function(){
    return 'En esta sección se encuentra la información de la empresa.';
});
#4
Route::get('PreguntasFrecuentes', function(){
    return 'En este sitio se van las preguntas que el cliente pueda tener.';
});
#5
Route::get('MisFavoritos', function(){
    return 'Aquí el cliente puede tener una sección donde vea los productos que más le gustaron.';
});