<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
})->name('homepage');

Route::get('/prodotti', function () {
    $array_prodotti = config('prodotti');
    $data = [
        'prodotti' => $array_prodotti
    ];
    return view('prodotti', $data);
})->name('lista-prodotti');

Route::get('/dettaglio-prodotto/{id}', function ($id) {
    $array_prodotti = config('prodotti');
    $data = [
        'prodotti' => $array_prodotti[$id]
    ];
    return view('dettaglio', $data);
})->name('dettaglio-singolo-prodotto');


Route::get('/magazzino', function () {
    return view('magazzino');
})->name('lista-magazzino');
