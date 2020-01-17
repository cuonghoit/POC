<?php session_start(); ?>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IHRDC') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'IHRDC') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        @guest
                            <!-- Left Side Of Navbar -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Training Management') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarTrainningManagement">
                                    @role('employees')
                                    <a class="dropdown-item" href="{{route('IATP',Auth::user()->id)}}"
                                       onclick="">
                                        {{ __('Individual Training') }}
                                    </a>
                                    @endrole

                                    @role('supervisors')
                                    <a class="dropdown-item" href="#"
                                       onclick="">
                                        {{ __('Group Training') }}
                                    </a>
                                    @endrole

                                    @hasanyrole('department_managers|director')
                                    <a class="dropdown-item" href="#"
                                       onclick="">
                                        {{ __('Department Training') }}
                                    </a>
                                    @endhasanyrole

                                    @role('general_director')
                                    <a class="dropdown-item" href="{{ route('CATP',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Company Training') }}
                                    </a>
                                    @endrole
                                    <div class="tabbable tabs-left">
                                        <ul class="nav nav-tabs">
                                            <li>
                                                <a id="nav-approve-training" class="dropdown-item" href="#"
                                                   onclick="">
                                                    {{ __('Approve Training') }}
                                                </a>
                                                <div class="tab-content ">
                                                    <div class="tab-pane" id="nav-approve-training">
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Approve Individual Training Plan') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Approve Group Training Plan') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Approve Department Training Plan') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Approve Company Training Plan') }}</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </li>
                        @endguest
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
