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


{{-- ok struttura laravel
ho un problema in terminale quando vato a digitare "npm run watch", ogni volta che lo scrivo esce questo errore "code: 'ERR_OSSL_EVP_UNSUPPORTED'"
ho aggiornato node (suggerito quando mi usciva errore), ma rimane comunque il problema, ho anche eliminato node_modules e reinstallato e scritto "npm run dev" ma non cambia nulla! --}}