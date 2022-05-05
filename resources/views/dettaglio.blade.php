@extends('layouts.app')

@section('title', 'Dettaglio Prodotto')

@section('content')
    <div class="dettaglio">
        <div class="img">

        </div>
        <div class="info">
            <h1>{{ $prodotti['nomeProdotto'] }}</h1>
            <p>{{ $prodotti['codiceProdotto'] }}</p>
            <p>{{ $prodotti['descrizione'] }}</p>
            <h4>{{ $prodotti['prezzo'] }}</h4>
        </div>
    </div>
@endsection

