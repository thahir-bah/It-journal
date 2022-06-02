@extends('base')

@section('title','About Us |' . env('APP_NAME'))


@section('content')
    <p><img src="/images/logo.jpeg" alt="logo" width=150px  heigh=300px></p>
    <p>Build with &hearts; by SIDDIK RAHMAN.</p>
    <p><a href="{{route('home')}}">revenir a la page d'accueil</a></p>
    
@endsection