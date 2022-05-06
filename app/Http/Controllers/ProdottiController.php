<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdottiController extends Controller
{
    public function listaProdotti() {
        $array_prodotti = config('prodotti');
        //usare compacts equivale alla funzione sotto
        return view('prodotti', compact('array_prodotti'));
    }

    public function dettaglioProdotto($id) {
        $array_prodotti = config('prodotti');
        $data = [
            'prodotti' => $array_prodotti[$id]
        ];
        return view('dettaglio', $data);
    }
}
