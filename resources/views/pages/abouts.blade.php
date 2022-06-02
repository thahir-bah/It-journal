@extends('base')

@section('title','About Us |' . env('APP_NAME'))


@section('content')
    <p>Build with &hearts; by LES TEACHERS DU NET.</p>
    <p><a href="{{route('home')}}">revenir a la page d'accueil</a></p>
    
@endsection