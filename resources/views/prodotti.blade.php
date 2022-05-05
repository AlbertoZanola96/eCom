@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="sfondo"></div>
    @foreach ($prodotti as $index => $prodotto)
        <div class="prod">
            <ul>
                <li>
                    <img src="{{ $prodotto['logo'] }}" alt="">
                    <h3>{{ $prodotto['nomeProdotto'] }}</h3> 
                    <a href="{{ route('dettaglio-singolo-prodotto', ['id' => $index]) }}">
                        <button>Dettagli</button>
                    </a>    
                </li>
            </ul>
        </div>
    @endforeach
@endsection

