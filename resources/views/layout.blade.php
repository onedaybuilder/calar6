<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Calar</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
       <link rel="stylesheet" type="text/css" href="/css/main.css">
    </head>
    <body class="antialiased">

            <!-- MENU LINKS -->
        <nav>
            <div>
                <ul>
                <li><a href="">Shop</a></li>
                <li><a href="">Artists</a></li>
                <li><a href="">Blog</a></li>
                </ul>
            </div>

            <!-- THE LOGO -->
            <div class="logo">
               <img src="/img/logo.jpg" alt="">
            </div>

            <div>
                <ul>
                
                <li><a href="">Sign in</a></li>
                <li><a href="">Gallery</a></li>
                <li><a href="">Faq</a></li>
                <li><a href="">Bag(0)</a></li>
                </ul>
            </div>
        </nav>

       @yield('content')
    </body>
</html>
