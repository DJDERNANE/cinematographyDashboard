<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->



    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <title>@yield('title')</title>

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> --}}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">




    <!-- selectpicker bootstrap CSS -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('adminFiles/css/custom.css') }}">
    <link href="{{ asset('adminFiles/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>


    <!-- selectpicker bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script src="https://npmcdn.com/flatpickr/dist/l10n/fr.js"></script>
    @yield('styling')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic&family=Montserrat&display=swap');

        *{
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }
    </style>
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        @include('layouts.navigation')
        <!-- Page Content -->
        <main>
            <div class="wrapper">
                <nav id="sidebar" class="sidebar">
                    <div class="sidebar-content js-simplebar">
                        <ul class="sidebar-nav">
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="/dashboard">
                                    <span>
                                        الرئيسية
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="{{route('film.index')}}">
                                    <span>
                                        الافلام
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="{{route('category.index')}}">
                                    <span>
                                        فئات الافلام
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="{{route('actor.index')}}">
                                    <span>
                                        الشخصيات
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="{{route('actorType.index')}}">
                                    <span>
                                        انواع الشخصيات
                                    </span>
                                </a>
                            </li>
                            <li class="sidebar-header" style="font-size: 18px;">
                                <a href="{{route('news.index')}}">
                                    <span>
                                        آخر المستجدات
                                    </span>
                                </a>
                            </li>




                        </ul>
                    </div>
                </nav>

                <div class="main">
                    <nav class="navbar navbar-expand navbar-light navbar-bg">
                        <a class="sidebar-toggle d-flex">
                            <i class="hamburger align-self-center"></i>
                        </a>
                    </nav>

                    <main class="content">
                        <div class="container-fluid p-0">
                            @yield('content')

                        </div>
                    </main>


                </div>
            </div>


            <script src="{{ asset('adminFiles/js/app.js') }}"></script>

        </main>
    </div>
</body>

</html>
