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
    return view('site.home');
})->name('site.home');

Route::get('/gamedesign', function () {
    return view('site.gamedesign');
})->name('site.gamedesign');

Route::get('/niveis', function () {
    return view('site.niveis');
})->name('site.niveis');

Route::get('/narrativa', function () {
    return view('site.narrativa');
})->name('site.narrativa');

Route::get('/ritmo', function () {
    return view('site.ritmo');
})->name('site.ritmo');

Route::get('/personagens', function () {
    return view('site.personagens');
})->name('site.personagens');

Route::get('/Jogabilidade', function () {
    return view('site.jogabilidade');
})->name('site.jogabilidade');

Route::get('/graficos', function () {
    return view('site.graficos');
})->name('site.graficos');

Route::get('/musicalizacao', function () {
    return view('site.musicalizacao');
})->name('site.musicalizacao');

Route::get('/sobre', function () {
    return view('site.sobre');
})->name('site.sobre');

Route::get('/forum', function () {
    return view('site.forum');
})->name('site.forum');
