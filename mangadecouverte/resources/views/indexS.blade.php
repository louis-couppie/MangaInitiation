@extends('layout.layout')

@section('titrePage')
    Liste des Scenaristes
@endsection

@section('titreItem')
    <h1>Tous les Scenaristes :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </thead>
        @foreach($scenaristes as $scenariste)
            <tr>
                <td> {{ $scenariste->id_scenariste }} </td>
                <td> {{ $scenariste->nom_scenariste }} </td>
                <td> {{ $scenariste->prenom_scenariste }} </td>
            </tr>
        @endforeach
    </table>
@endsection