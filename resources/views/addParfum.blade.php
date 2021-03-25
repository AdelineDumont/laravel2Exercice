@extends('layouts.base')
@section('title', 'Ajout')
@section('css')
    <link rel="stylesheet" href="{{ asset('/css/add.css') }}">
@endsection

@section('content')
    <h1 class="title">Ajouter un nouveau parfum</h1>
    <div>
        <form action="/addParfum" method="POST">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-4 col-form-label">Nom</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" value="Trésor">
                </div>
            </div>
            <div class="form-group row">
                <label for="marque" class="col-sm-4 col-form-label">Marque</label>
                <div class="col-sm-8">
                    <select name="marque_id" id="">
                        @foreach ($marques as $marque)
                        <option value="{{ $marque->id }}">{{ $marque->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="prix" class="col-sm-4 col-form-label">Prix</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control" name="prix" placeholder="Prix" value="80">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Ajouter !</button>
            </div>
        </form>
    </div>
@endsection