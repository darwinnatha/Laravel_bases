@extends('include.master')
@section('title')
    Services
@endsection
@section('contenu')
    <h1>Voici la page de nos produits</h1>
    @if(Session::has("status"))
        <div class="alert alert-success">
            {{Session::get('status')}}
        </div>
        @endif
        @foreach($produits as $produit)
            <div class="well">
                <h1>
                    <a href="/show/{{$produit->id}}">{{$produit->nom_produit}}</a>
                </h1>
            </div>
        @endforeach
{{--    {{$produits->links()}}--}}
@endsection
<?php
?>
