<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'InFlow') }} - @yield('title')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="{{ asset('fonts/css/all.min.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-200">
    <div id="app">
        {{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
        </main> --}}
        <!-- Administation Dashboard Layout Start -->
          <div class="flex h-screen">
            <!-- Main Sidebar Start -->
              <aside class="w-64 bg-gray-700">
                <div class="px-3 py-3 border-b-4 border-indigo-600">
                  <a href="{{ route('home') }}">
                    <span class="block text-3xl text-gray-50 font-light">{{ __('InFlow') }}</span>
                    <span class="block text-xs text-indigo-400 uppercase font-light">{{ __('Inventory Management') }}</span>
                  </a>
                </div>
                <div class="px-3 py-3 mt-3">
                  <h4 class="block text-xs uppercase text-gray-500">{{ __('General') }}</h4>
                </div>
                <div class="">
                  <a href="{{ route('home') }}" class="block text-gray-200 font-light hover:bg-gray-600 hover:text-gray-100 px-3 py-2">
                    <span class="pr-1"><i class="fal fa-tachometer-alt"></i></span>
                    <span class="pl-1">{{ __('Dashboard') }}</span>
                  </a>
                </div>
                <div class="px-3 py-3 mt-3">
                  <h4 class="block text-xs uppercase text-gray-500">{{ __('User Management') }}</h4>
                </div>
                <div class="">
                  <a href="{{ route('users.index') }}" class="block text-gray-200 font-light hover:bg-gray-600 hover:text-gray-100 px-3 py-2">
                    <span class="pr-1"><i class="fal fa-users"></i></span>
                    <span class="pl-1">{{ __('Users') }}</span>
                  </a>
                </div>
              </aside>
            <!-- Main Sidebar End -->
            <!-- Main Content Section Start -->
              <main class="flex-1 p-3">
                @yield('content')
              </main>
            <!-- Main Content Section End -->
          </div>
        <!-- Administation Dashboard Layout End -->
    </div>
</body>
</html>
