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

Route::get('/', 'MainController@home')->name('homepage');

Route::get('/prodotti', 'ProdottiController@listaProdotti')->name('lista-prodotti');

Route::get('/dettaglio-prodotto/{id}', 'ProdottiController@dettaglioProdotto')->name('dettaglio-singolo-prodotto');

Route::get('/magazzino', 'MainController@magazzino')->name('lista-magazzino');
