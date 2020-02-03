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
                    <img src="{{ asset('images/poc-logo.png') }}"/>
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

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                    @hasanyrole('employees|super-admin')
                                    <a class="dropdown-item" href="{{route('IATP',Auth::user()->id)}}"
                                       onclick="">
                                        {{ __('Individual Training') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('supervisors|super-admin')
                                    <a class="dropdown-item" href="{{route('MMAPR_FBL',Auth::user()->id)}}"
                                       onclick="">
                                        {{ __('Group Training') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('department_managers|director|super-admin')
                                    <a class="dropdown-item" href="{{ route('datp',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Department Training') }}
                                    </a>
                                    @endhasanyrole

                                    @hasanyrole('general_director|super-admin')
                                    <a class="dropdown-item" href="{{ route('CATP',Auth::user()->id) }}"
                                       onclick="">
                                        {{ __('Company Training') }}
                                    </a>
                                    @endrole
                                    
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Approve Training') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <a class="dropdown-item" href="#"onclick="">{{ __('Approve Individual Training Plan') }}</a>
                                            <a class="dropdown-item" href="#"onclick="">{{ __('Approve Group Training Plan') }}</a>
                                            <a class="dropdown-item" href="{{ route('adatp',Auth::user()->id) }}"onclick="">{{ __('Approve Department Training Plan') }}</a>
                                            <a class="dropdown-item" href="#"onclick="">{{ __('Approve Company Training Plan') }}</a>
                                        </div>
                                    </div>
                                  
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-training-implementation" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Training Implementation') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="training-implementation-content">
                                            <a class="dropdown-item" href="{{route('CATPS')}}"onclick="">{{ __('Company Annual Training Plan Schedule') }}</a>
                                            <a class="dropdown-item" href="{{route('CATPP')}}"onclick="">{{ __('Company Annual Training Plan Progress') }}</a>
                                            <a class="dropdown-item" href="{{ route('PTEBP',Auth::user()->id) }}"onclick="">{{ __('Post Training Evaluation by Participant') }}</a>
                                            <a class="dropdown-item" href="{{route('PTECR')}}"onclick="">{{ __('Post Training Evaluation Combined Records') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ __('Perfomance Management') }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Building My MSC Objectives') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Building My MSC Objectives') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Building My MSC Objectives') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Building My Monthly MSC Objectives') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Building My Personal Deveopment Plan') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Approving My Employees MSC Objectives') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Approving My Employees Annual MSC Objectives') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Approving My Employees Monthly MSC Objectives') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Rating Performance') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Rating My Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Rating My Monthly Performance') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Rating My Monthly Performance') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Rating My Monthly Performance') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Approving My Employees Annual Performance') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Approving My Employees Monthly Performance') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Performance Management') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Managing Company Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{route('CMPR')}}"onclick="">{{ __('Company Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('CMMPR')}}"onclick="">{{ __('Company Multi-Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('CAPR')}}"onclick="">{{ __('Company Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('CMAPR')}}"onclick="">{{ __('Company Multi-Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('CMPR_FBL')}}"onclick="">{{ __('Company Monthly Performance Report - Filter by Level') }}</a>
                                                    <a class="dropdown-item" href="{{route('CAPR_FBL')}}"onclick="">{{ __('Company Annual Performance Report - Filter by Level') }}</a>
                                                    <a class="dropdown-item" href="{{route('CMAPR_FBL')}}"onclick="">{{ __('Company Multi-Annual Performance  Report - Filter by Level') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Managing Department Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{route('DMPR')}}"onclick="">{{ __('Department Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('DMMPR')}}"onclick="">{{ __('Department Multi-Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('DAPR')}}"onclick="">{{ __('Department Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('DMAPR')}}"onclick="">{{ __('Department Multi-Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('DMPR_FBL')}}"onclick="">{{ __('Department Monthly Performance Report - Filter by Level') }}</a>
                                                    <a class="dropdown-item" href="{{route('DAPR_FBL')}}"onclick="">{{ __('Department Annual Performance Report - Filter by Level') }}</a>
                                                    <a class="dropdown-item" href="{{route('DMAPR_FBL')}}"onclick="">{{ __('Department Multi-Annual Performance  Report - Filter by Level') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Managing Employees Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{route('EMPR',Auth::user()->id)}}"onclick="">{{ __('Employees Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('EMMPR',Auth::user()->id)}}"onclick="">{{ __('Employees Multi-Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('EAPR',Auth::user()->id)}}"onclick="">{{ __('Employees Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('EMAPR',Auth::user()->id)}}"onclick="">{{ __('Employees Multi-Anual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('EMMPR_FBL',Auth::user()->id)}}"onclick="">{{ __('Employees Monthly Performance Report - Filter by Level') }}</a>
                                                    <a class="dropdown-item" href="{{route('EMAPR_FBL',Auth::user()->id)}}"onclick="">{{ __('Employees Annual Performance Report - Filter by Level') }}</a>
                                                </div>
                                            </div>
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('Managing My Performances') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="{{route('MMPR',Auth::user()->id)}}"onclick="">{{ __('My Monthly Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('MMMPR',Auth::user()->id)}}"onclick="">{{ __('My Multi-Month Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('MAPR',Auth::user()->id)}}"onclick="">{{ __('My Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('MMAPR',Auth::user()->id)}}"onclick="">{{ __('My Multi-Annual Performance Report') }}</a>
                                                    <a class="dropdown-item" href="{{route('MMMPR_FBL',Auth::user()->id)}}"onclick="">{{ __('My Multi-Month Performance Report - Filter by Levels') }}</a>
                                                    <a class="dropdown-item" href="{{route('MMAPR_FBL',Auth::user()->id)}}"onclick="">{{ __('My Multi-Annual Performance Report - Filter by Levels') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropright dropdown-item submenu">
                                        <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            {{ __('Administrator') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                            <div class="dropright dropdown-item submenu">
                                                <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ __('User Management') }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Add new User Account') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Edite User Account') }}</a>
                                                    <a class="dropdown-item" href="#"onclick="">{{ __('Delete User Account') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ __('Pre-Test Management System') }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarTrainningManagement">
                                        <div class="dropright dropdown-item submenu">
                                            <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('Candidate Page') }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Test Invitation Email') }}
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Input Personal Info') }}
                                                </a>
                                                <div class="dropright dropdown-item submenu">
                                                    <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ __('Test Selection') }}
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Personality Test') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('IQ/Aptitude Test') }}</a>
                                                    </div>
                                                </div>
                                                <div class="dropright dropdown-item submenu">
                                                    <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ __('Test Results') }}
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Personality Test Results') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('IQ/Aptitude Test Results') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropright dropdown-item submenu">
                                            <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('Recruiter Page') }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Candidate List') }}
                                                </a>
                                                <div class="dropright dropdown-item submenu">
                                                    <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        {{ __('Test Results Selection') }}
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Test Results Selectioni by Candidate') }}</a>
                                                        <a class="dropdown-item" href="#"onclick="">{{ __('Test Results Selection by Job Titles') }}</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropright dropdown-item submenu">
                                            <a id="nav-approve-training" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('Admin Page') }}
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-left" aria-labelledby="approve-training-content">
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Add the Questions') }}
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Delete the Questions') }}
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Edit the Questions') }}
                                                </a>
                                                <a class="dropdown-item" href="#">
                                                    {{ __('Edit the Tests') }}
                                                </a>
                                            </div>
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

                                <div class="dropdown-menu dropdown-menu-left" aria-labelledby="navbarDropdown">
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
