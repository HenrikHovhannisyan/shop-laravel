<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('/favicon.png') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

    <!-- Scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
    <script src="{{asset('/js/app.js')}}"></script>
</head>
<body class="bg-white">
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/') }}">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"
                     width="" height="30" viewBox="0 0 3300 660.2451367270257">

                    <g transform="scale(15) translate(10, 10)">
                        <defs id="SvgjsDefs1686"></defs>
                        <g id="SvgjsG1687" featurekey="nameFeature-0"
                           transform="matrix(0.8881783149155641,0,0,0.8881783149155641,-1.5987202892217376,-9.130471993129955)"
                           fill="#000">
                            <path
                                d="M34.92 22.88 l-30.88 0 l0 -9.76 l30.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 l-33.12 0 l0 25.12 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -10.88 l30.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M79.26 35.28 l-21.52 -25 l-20.84 25 c-0.16 0.18668 -0.24 0.41336 -0.24 0.68004 c0 0.77332 0.38668 1.16 1.16 1.16 c0.32 0 0.58668 -0.13332 0.8 -0.4 l0 0 l6.32 -7.6 l26.08 0 l6.56 7.6 c0.24 0.26668 0.53332 0.4 0.88 0.4 c0.72 0 1.08 -0.36 1.08 -1.08 c0 -0.29332 -0.09332 -0.54664 -0.28 -0.75996 z M46.82 26.880000000000003 l10.96 -13.16 l11.36 13.16 l-22.32 0 z M113.20000000000002 10.879999999999999 l-32 0 c-0.74668 0 -1.12 0.37332 -1.12 1.12 s0.37332 1.12 1.12 1.12 l14.88 0 l0 22.88 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -22.88 l14.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M147.22000000000003 10.879999999999999 l-32 0 c-0.74668 0 -1.12 0.37332 -1.12 1.12 s0.37332 1.12 1.12 1.12 l14.88 0 l0 22.88 c0 0.74668 0.37332 1.12 1.12 1.12 s1.12 -0.37332 1.12 -1.12 l0 -22.88 l14.88 0 c0.74668 0 1.12 -0.37332 1.12 -1.12 s-0.37332 -1.12 -1.12 -1.12 z M182.32000000000002 35.12 l-30.88 0 l0 -22.88 c0 -0.74668 -0.37332 -1.12 -1.12 -1.12 s-1.12 0.37332 -1.12 1.12 l0 25.08 l33.12 0 c0.74668 0 1.12 -0.36 1.12 -1.08 c0 -0.74668 -0.37332 -1.12 -1.12 -1.12 z M226.70000000000002 35.28 l-21.52 -25 l-20.84 25 c-0.16 0.18668 -0.24 0.41336 -0.24 0.68004 c0 0.77332 0.38668 1.16 1.16 1.16 c0.32 0 0.58668 -0.13332 0.8 -0.4 l0 0 l6.32 -7.6 l26.08 0 l6.56 7.6 c0.24 0.26668 0.53332 0.4 0.88 0.4 c0.72 0 1.08 -0.36 1.08 -1.08 c0 -0.29332 -0.09332 -0.54664 -0.28 -0.75996 z M194.26000000000002 26.880000000000003 l10.96 -13.16 l11.36 13.16 l-22.32 0 z"></path>
                        </g>
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
                        <a class="nav-link nav_link" href="{{route('admin.home')}}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="{{route('categories.index')}}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav_link" href="{{route('products.index')}}">Products</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav_link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link nav_link" href="{{ route('register') }}">{{ __('Register') }}</a>
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
                </ul>
            </div>
        </div>
    </nav>

    <div class="wrapper">
        @include('admin.layouts.sidebar')
        <div id="content">
            <button type="button" id="sidebarCollapse" class="btn btn-dark ms-2 mb-3">
                <i class="fas fa-align-left"></i>
            </button>
            @yield('content')
        </div>
    </div>
</div>
</body>
</html>
