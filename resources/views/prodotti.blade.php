@extends('layouts.app')

@section('title', 'Prodotti')

@section('content')
    <div class="sfondo"></div>
    @foreach ($array_prodotti as $index => $array_prodotto)
        <div class="prod">
            <ul>
                <li>
                    <img src="{{ $array_prodotto['logo'] }}" alt="">
                    <h3>{{ $array_prodotto['nomeProdotto'] }}</h3> 
                    <a href="{{ route('dettaglio-singolo-prodotto', ['id' => $index]) }}">
                        <button>Dettagli</button>
                    </a>    
                </li>
            </ul>
        </div>
    @endforeach
@endsection

