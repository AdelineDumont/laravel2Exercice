@extends('layouts.base')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/list.css')}}">
@endsection

@section('title', 'Parfum')

@section('content')
<h1 class="title">Liste des parfums</h1>

<div class="list">
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Marque</th>
                <th scope="col">prix</th>
                <th scope="col">Modif</th>
                <th scope="col">Supp</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($parfums as $parfum)
            <tr>
                <th scope="row">{{ $parfum->id }}</th>
                <td><a href="/parfum/{{ $parfum->id }}">{{ $parfum->nom }}</a></td>
                <td>{{ $parfum->marque }}</td>
                <td>{{ $parfum->prix }}</td>
                <td>
                    <a href="/updateParfum/{{ $parfum->id }}" class="btn btn-success">U</a>
                </td>
                <td>
                    <form action="/deleteParfum" method="POST">
                        @csrf
                        <input type="hidden" name="id" value="{{ $parfum->id }}">
                        <input type="submit" class="btn btn-danger" value="X">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection