@extends('layouts.base')
@section('title', 'Parfum')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
@endsection

@section('content')
    <h1 class="title">Détail du parfum</h1>
    <div id="card">
        <div class="card border-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">{{ $parfum->nom }}</div>
            <div class="card-body text-dark flex">
                <p>Marque :</p>
                <p class="card-text">{{ $parfum->marque }}</p>
            </div>
            <div class="card-body text-dark flex">
                <p>Prix :</p>
                <p class="card-text">{{ $parfum->prix }}</p>
            </div>
        </div>
    </div>
@endsection