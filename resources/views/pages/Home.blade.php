@extends('layouts/base', ['title'=> ' hello city'])

@section('content')

<p><img src="/images/logo.jpeg" alt="logo" width=150px  heigh=300px></p>
     <h1>hello from Quebec!</h1>
     <p>It's currently {{date('h:i A')}} .</p>
    
  @endsection   
