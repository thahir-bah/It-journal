<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title',env ('APP_NAME'))</title>
       
    </head>
    <body>
        @yield('content')
       {{config('project.slogan')}}

     <footer>
         
         <p>&copy; Copyright {{date('Y')}}
         @if( !Route::is ('about'))
           &middot; <a href="{{route('about')}}">About Us</a></p>
         @endif
     </footer>
    </body>
</html>
