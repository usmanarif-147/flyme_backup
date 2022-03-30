<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TANDEMFLÜGE FLY ACHENSEE') }}</title>

<!-- Fonts -->
    <link rel="shortcut icon" href="{{asset('auth/assets/images/favicon.png')}}" type="image/png"/>
    <link href="{{asset('auth/assets/main.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/file-input/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('auth/assets/file-input/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('auth/style.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/responsive.css')}}" rel="stylesheet">

    <!-- Styles -->
</head>
<body>
<div id="app">
    <div class="app-container app-theme-white body-tabs-shadow">
        <div class="app-container">
            <div class="h-100 bg-plum-plate bg-animation">
                <div class="d-flex h-100 justify-content-center align-items-center">
                    <div class="mx-auto app-login-box col-md-8">
                        <div class="modal-dialog w-100 mx-auto">
                            @yield('content')
                        </div>
                        <div class="text-center text-white opacity-8 mt-3">© 2022 - All Rights Reserved</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/main.js')}}"></script>
    <script src="{{asset('auth/assets/scripts/file-input/sortable.jsi')}}" type="text/javascript"></script>
    <script src="{{asset('auth/assets/scripts/file-input/fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('auth/assets/scripts/file-input/theme.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/functions.js')}}"></script>
    <script type="text/javascript" src="{{asset('auth/assets/graph.js')}}"></script>
    <script type="text/javascript" src="{{asset('script/calendar.min.js')}}"></script>

    @yield('script')
</div>
</body>
</html>
