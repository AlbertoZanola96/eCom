@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="home">
        <img src="{{ asset('immagini/home.jpg') }}" alt="">
        <div class="testo">
            <h1>Attrezzatura per il lavoro</h1>
            <h3>Lavora giusto Lavora meglio</h3>
        </div>
    </div>
@endsection