@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="prod">
        
        <div class="prod-opacity"></div>
        <ul>
            @foreach ($prodotti as $prodotto)
                <li>
                    <h3>{{ $prodotto['nomeProdotto'] }}</h3> 
                    <h5>{{ $prodotto['codiceProdotto'] }}</h5>
                    <p>{{ $prodotto['descrizione'] }}</p>
                    <p>{{ $prodotto['prezzo'] }}</p>
                    <br/>
                </li>
            @endforeach
        </ul>
    </div>
@endsection

