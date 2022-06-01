<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>@yield('title','Hello city')</title>
       
    </head>
    <body>
        @yield('content')
     

     <footer>
         <p>&copy; Copyright {{date('Y')}}  &middot; <a href="/about-us">About Us</a></p>
     </footer>
    </body>
</html>
