@extends('include.master')
@section('title')
    Détails
@endsection
@section('contenu')
    <h1>Voici la page du produit: {{$produit->nom_produit}}</h1>
    @if(Session::has("status"))
        <div class="alert alert-success">
            {{Session::get('status')}}
        </div>
    @endif
        <div class="well">
            <p>Nom: {{$produit->nom_produit}}</p>
            <p>Prix: {{$produit->prix_produit}}</p>
            <p>Description: {{$produit->description_produit}}</p>
            <p>Crée le : {{$produit->created_at}}</p>
            <hr>
            <a href="{{url('editprod', [$produit->id])}}" class="btn btn-default">Edit</a>
            <form action="{{url('deleteprod', [$produit->id])}}" class="pull-right" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
@endsection
<?php
?>

