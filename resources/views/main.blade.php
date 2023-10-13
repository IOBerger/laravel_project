<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Creativity - @section('title') @show</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link type="text/css" href="{{ url('/css/styles.css') }}" rel="stylesheet" />

    </head>
    <body>
        <nav class="main-nav">
            <a class="nav-item" href="/news_categories/">News<span class="nav-item-note">Some new creativity of mine</span></a>  
            <a class="nav-item" href="/info/">Info<span class="nav-item-note">Information about me</span></a>  
            <a class="nav-item" href="/hello/">Hello<span class="nav-item-note">My great hello to you</span></a>  
            <a class="nav-item" href="/contact/">Contact us<span class="nav-item-note">Leave the review here</span></a>  
        </nav>
        <main>
            <h1>@section('title')@show</h1>   
            @yield('content')
        </main>
    
    </body>
</html>
