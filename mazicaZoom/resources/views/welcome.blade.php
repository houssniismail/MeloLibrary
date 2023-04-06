<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>mazica</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="">
    </head >
    <body class="antialiased bg-black" style="background-image: url(téléchargement.jfif); background-size: 100vh; background-repeat: no-repeat;">
                        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="{{asset('/')}}"><h1>Studio</h1></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        <li class="nav-item">
                            <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                                    @auth
                                        <a href="{{ url('/home') }}" class="p-3 mb-2 text-white" style="text-decoration: none;">Home</a>
                                    @else
                                        <a href="{{ route('login') }}" class="p-3 mb-2  text-white" style="text-decoration: none;">Log in</a>
                
                                        @if (Route::has('register'))
                                            <a href="{{ route('register') }}" class="p-3 mb-2  text-white" style="text-decoration: none;">Register</a>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </div></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </body>
</html>
