@extends('layouts.app')

@section('comics-box')
    <div class="prodotti">
        <div class="container">
            <h1>Tutti i prodotti</h1>
            @foreach ($comics as $indice => $elemento)
            <div class="card">
                <img src="{{$elemento['thumb']}}" >
                <div class="overlay">
                    {{ $elemento['title'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
