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
         <p>&copy; Copyright {{date('Y')}}  &middot; <a href="{{route('about')}}">About Us</a></p>
     </footer>
    </body>
</html>
