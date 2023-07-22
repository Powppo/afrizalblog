<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Afrizal Blog') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<head>
    <meta charset="utf-8">
    <title>Afrizal's Blog</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('Template/img/favicon.ico')}}" rel="icon">

    <!-- Font Awesome -->
    <link href="{{asset('Template/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css')}}" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset('Template/lib/flaticon/font/flaticon.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('Template/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a href="/home" class="navbar-brand">
                    <h1 class="m-0 display-4 font-weight-bold text-uppercase text-black">Homepage</h1>
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                            <div>
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold"href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            </div>
                                
                            @endif

                            @if (Route::has('register'))
                            <div>
                                <li class="nav-item">
                                    <a class="nav-link text-primary font-weight-bold" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            </div>
                            @endif

                        @else
                            <a href="/home/contact" class="nav-link text-primary font-weight-bold">Contact Me</a>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link text-black dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }},
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" method="GET" href= {{ route('myProfile', Auth::user()->id) }}>My Profile</a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
<br>
<div style="margin-top: 250px"></div>
<!-- Footer Start -->
<div class="footer container-fluid mt-5 py-5 px-sm-3 px-md-5 text-white">
    <p class="m-0 text-center text-white">
        &copy; <a class="text-white font-weight-bold" href="#">Afrizal</a>. All Rights Reserved.
    </p>
</div>
<!-- Footer End -->
</html>
