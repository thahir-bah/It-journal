@extends('layouts/base' , ['title'=> 'About UP | hello city'])




@section('content')
<p><img src="/images/me.jpeg" alt="ma photo" width=150px  heigh=300px></p>
    <p>Build with &hearts; by SIDDIK RAHMAN.</p>
    <p><a href="{{route('home')}}">revenir a la page d'accueil</a></p>
    
@endsection