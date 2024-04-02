<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="stylesheet" href="/style/style.css">

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        
    </head>
    <body class=" antialiased">
        @if(session()->has('success'))
        <div class="alert">
            {{session()->get('success')}}
        </div>
        @endif
       <div class="nav-wrapper">
        <nav>
            <a href="{{route('home.index')}}"><div>Home</div></a>
            <a href="{{route('blog.index')}}"><div>Blogs</div></a>
            <a href="{{route('blog.create')}}"><div>Create Blog</div></a> 

              
        </nav>
       </div>

       <!--creaza un spatiu pentru continut in pagina-->
       @yield('content')     
       </body>
    </body>
</html>
