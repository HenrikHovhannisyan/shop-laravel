<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>
    <link rel="icon" href="{{ asset('/favicon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}?v=<?php echo filemtime(public_path('css/app.css')); ?>">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}?v=<?php echo filemtime(public_path('js/app.js')); ?>"></script>
    @yield('styles')
</head>
<body>
<button id="back-to-top-button" onclick="scrollToTop()">
    <i class="fa-solid fa-arrow-up"></i>
</button>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white border-bottom border-dark pb-1 pt-1">
        <div class="container-fluid" style="max-width: 1600px">
            <a class="navbar-brand" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="" height="40" viewBox="0 0 3300 660.2451367270257">

                    <g transform="scale(15) translate(10, 10)">
                        <defs id="SvgjsDefs1686"></defs><g id="SvgjsG1687" featurekey="nameFeature-0" transform="matrix(0.8881783149155641,0,0,0.8881783149155641,-1.5987202892217376,-9.130471993129955)" fill="#000"><path d="M34.92 22.88 l-30.88 0 l0 -9.76 l30.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 l-33.12 0 l0 25.12 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -10.88 l30.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M79.26 35.28 l-21.52 -25 l-20.84 25 c-0.16 0.18668 -0.24 0.41336 -0.24 0.68004 c0 0.77332 0.38668 1.16 1.16 1.16 c0.32 0 0.58668 -0.13332 0.8 -0.4 l0 0 l6.32 -7.6 l26.08 0 l6.56 7.6 c0.24 0.26668 0.53332 0.4 0.88 0.4 c0.72 0 1.08 -0.36 1.08 -1.08 c0 -0.29332 -0.09332 -0.54664 -0.28 -0.75996 z M46.82 26.880000000000003 l10.96 -13.16 l11.36 13.16 l-22.32 0 z M113.20000000000002 10.879999999999999 l-32 0 c-0.74668 0 -1.12 0.37332 -1.12 1.12 s0.37332 1.12 1.12 1.12 l14.88 0 l0 22.88 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -22.88 l14.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M147.22000000000003 10.879999999999999 l-32 0 c-0.74668 0 -1.12 0.37332 -1.12 1.12 s0.37332 1.12 1.12 1.12 l14.88 0 l0 22.88 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -22.88 l14.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M182.32000000000002 35.12 l-30.88 0 l0 -22.88 c0 -0.74668 -0.37332 -1.12 -1.12 -1.12 s-1.12 0.37332 -1.12 1.12 l0 25.08 l33.12 0 c0.74668 0 1.12 -0.36 1.12 -1.08 c0 -0.74668 -0.37332 -1.12 -1.12 -1.12 z M226.70000000000002 35.28 l-21.52 -25 l-20.84 25 c-0.16 0.18668 -0.24 0.41336 -0.24 0.68004 c0 0.77332 0.38668 1.16 1.16 1.16 c0.32 0 0.58668 -0.13332 0.8 -0.4 l0 0 l6.32 -7.6 l26.08 0 l6.56 7.6 c0.24 0.26668 0.53332 0.4 0.88 0.4 c0.72 0 1.08 -0.36 1.08 -1.08 c0 -0.29332 -0.09332 -0.54664 -0.28 -0.75996 z M194.26000000000002 26.880000000000003 l10.96 -13.16 l11.36 13.16 l-22.32 0 z"></path></g>
                    </g>
                </svg>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">Men</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">The Gift Guide</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">Sustainability</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">Magazine</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav_link" href="{{ route('login') }}">Sign In</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav_link" href="{{ route('register') }}">Sign Up</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link nav_link dropdown-toggle" href="#" role="button"
                               data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">
                            <i class="fa-regular fa-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="#">
                            <i class="fa-solid fa-cart-shopping"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    @yield('script')
</div>
</body>
</html>
