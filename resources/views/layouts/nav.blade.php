<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
{{-- alaa --}}
                @if (Auth::check() && Auth::user()->role === 'admin') 
                    <a class="navbar-brand" href="/home">Home</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                <a class="nav-link " href="{{route('products.index')}}">Products </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link " href="{{route('products.trashed')}}">Deleted Products </a>
                                </li>
                                <li class="nav-item ">
                                <a class="nav-link" href="{{route('categories.index')}}">Categories <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link" href="{{route('orders.list')}}">Orders <span class="sr-only"> </span></a>
                                </li>    
                                <li class="nav-item">
                                <a class="nav-link " href="{{route('users.index')}}">Users <span class="sr-only"> </span></a>
                                </li>                             
                            </ul>
                            </div>
                            @else
                            <ul class="navbar-nav">
                                <li class="nav-item ">
                                <a class="nav-link " href="{{route('products.index')}}">Products </a>
                                </li>
                                <li class="nav-item">
                                {{-- <a class="nav-link " href="{{route('products.trashed')}}">Deleted Products </a> --}}
                                </li>
                                <li class="nav-item ">
                                <a class="nav-link" href="{{route('categories.index')}}">Categories <span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                {{-- <a class="nav-link" href="{{route('orders.list')}}">Orders <span class="sr-only">(current)</span></a> --}}
                                </li>    
                                <li class="nav-item">
                                {{-- <a class="nav-link " href="{{route('users.index')}}">Users <span class="sr-only">(current)</span></a> --}}
                                </li>                             
                            </ul>
                            @endif
                            

{{-- alaa --}}
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>




{{-- <nav>
    <ul>
        @if (Auth::check())
            <li>مرحبًا، {{ Auth::user()->name }}</li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit">تسجيل الخروج</button>
                </form>
            </li>
        @else
            <li><a href="{{ route('login') }}">تسجيل الدخول</a></li>
            <li><a href="{{ route('register') }}">التسجيل</a></li>
        @endif
    </ul>
</nav> --}}