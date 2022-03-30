<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="TANDEMFLÜGE FLY ACHENSEE">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TANDEMFLÜGE FLY ACHENSEE</title>
    <!-- Css Files -->
    <link rel="shortcut icon" href="images/favicon.png" type="image/png"/>
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
          integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link href="{{asset('css/calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('style.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
<!--// Main Wrapper \\-->
{{--@yield('content')--}}

<div class="fpms-main-wrapper">
    @include('partials.front.front_header')
    <div class="sub-banner"></div>
    <!--// Main Content \\-->
@yield('content')
<!--// Main Content \\-->
    <!--// Footer \\-->
@include('partials.front.front_footer')
<!--// Footer \\-->
    <div class="clearfix"></div>
</div>


<!--// Main Wrapper \\-->
<!-- jQuery (necessary for JavaScript plugins) -->
<script type="text/javascript" src="{{asset('script/jquery.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('script/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('script/slick.slider.min.js')}}"></script>
<script type="text/javascript" src="{{asset('script/magnify-popup.js')}}"></script>
<script type="text/javascript" src="{{asset('script/functions.js')}}"></script>
<script type="text/javascript" src="{{asset('script/calendar.min.js')}}"></script>
@yield('script')
</body>

</html>
