@extends('layout.layout')

@section('titrePage')
    Liste des Dessinateurs
@endsection

@section('titreItem')
    <h1>Tous les Dessinateurs :</h1>
@endsection

@section('contenu')
    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </thead>
        @foreach($dessinateurs as $dessinateur)
            <tr>
                <td> {{ $dessinateur->id_dessinateur }} </td>
                <td> {{ $dessinateur->nom_dessinateur }} </td>
                <td> {{ $dessinateur->prenom_dessinateur }} </td>
            </tr>
        @endforeach
    </table>
@endsection