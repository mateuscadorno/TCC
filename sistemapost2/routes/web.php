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
Route::get('criar-post', function () {
    return view('post.create-post');
});

Route::post('criar-post', 'PostController@create');

Route::get('lista-post', 'PostController@index');

Route::get('', function () {
    return view('home');
});

Route::get('vizualizar-post/{id}','PostController@show');

Route::get('/spf', function () {
    return view('spf');
});

Route::get('/quemsomos', function () {
    return view('quemsomos');
});

Route::get('/entrar', function () {
    return view('login');
});

Route::get('/horario', function () {
    return view('horario');
});

Route::get('/fec', function () {
    return view('fec');
});

Route::get('/expoete', function () {
    return view('expoete');
});

Route::get('/cursotecnico', function () {
    return view('cursotecnico');
});

Route::get('/cursonoturno', function () {
    return view('cursonoturno');
});

Route::get('/certificado', function () {
    return view('certificado');
});

Route::get('/calendario', function () {
    return view('calendario');
});

Route::get('/caipirete', function () {
    return view('caipirete');
});

Route::get('/apm', function () {
    return view('apm');
});


Auth::routes();


