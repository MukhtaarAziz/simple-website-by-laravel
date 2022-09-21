<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ (in_array( app()->getLocale(),\App\MukhtaarAziz\MyApplication::RTL_LANGUAGES))? 'rtl' : 'ltr' }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Fontawesome 4.7 -->
    <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm sticky-top ">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ __('navbar.logo') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav {{ (in_array( app()->getLocale(),\App\MukhtaarAziz\MyApplication::RTL_LANGUAGES))? 'ms-auto' : 'me-auto' }}">
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->path() == '/')? 'active' : '' }}" href="{{ route('home.page') }}">{{ __('navbar.home') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->path() == 'about')? 'active' : '' }}" href="{{ route('about.page') }}">{{ __('navbar.about') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->path() == 'contact')? 'active' : '' }}" href="{{ route('contact.page') }}">{{ __('navbar.contact') }}</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav  {{ (in_array( app()->getLocale(),\App\MukhtaarAziz\MyApplication::RTL_LANGUAGES))? 'me-auto' : 'ms-auto' }}">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->path() == 'login')? 'active' : '' }} " href="{{ route('login') }}"> <i class="fa fa-sign-in"></i> {{ __('navbar.login') }}</a>
                        </li>
                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link {{ (request()->path() == 'register')? 'active' : '' }} " href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li class="nav-item ">
                            <a class="nav-link {{ (request()->path() == 'admins/messages')? 'active' : '' }} " href="{{ route('contactusmessage.index') }}"> <i class="fa fa-envelope"></i> {{ __('navbar.messages') }}</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-user"></i> {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('admins.profile') }}" >
                                        <i class="fa fa-user"></i> <span class="px-2">{{ __('navbar.profile') }}</span>
                                    </a>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out"></i> {{ __('navbar.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa fa-globe"></i> {{__('navbar.language') }}
                            </a>

                            <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="navbarDropdown">
                                <li class="d-flex justify-content-start">
                                    <a  class="dropdown-item" href="{{ url('language/ar') }}" role="button">
                                        {{__('العربية') }}
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start">
                                    <a  class="dropdown-item" href="{{ url('language/en') }}" role="button">
                                        {{__('الانجليزية') }}
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start">
                                    <a  class="dropdown-item" href="{{ url('language/fa') }}" role="button">
                                        {{__('الفارسية') }}
                                    </a>
                                </li>
                                <li class="d-flex justify-content-start">
                                    <a  class="dropdown-item" href="{{ url('language/tr') }}" role="button">
                                        {{__('التركية') }}
                                    </a>
                                </li>
                            </ul>




                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="">
            @yield('content')
        </main>
    </div>
    @include('includes.footer')

</body>
</html>