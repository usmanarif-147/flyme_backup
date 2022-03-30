<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>TANDEMFLÜGE FLY ACHENSEE</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="shortcut icon" href="{{asset('auth/assets/images/favicon.png')}}" type="image/png"/>
    <link href="{{asset('auth/assets/main.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/font-awesome.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/file-input/fileinput.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('auth/assets/file-input/theme.css')}}" media="all" rel="stylesheet" type="text/css"/>
    <link href="{{asset('css/calendar.min.css')}}" rel="stylesheet">
    <link href="{{asset('auth/style.css')}}" rel="stylesheet">
    <link href="{{asset('auth/assets/responsive.css')}}" rel="stylesheet">

@yield('css')

<!-- Styles -->
</head>
<body>
<div id="app">
    <div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
        @include('partials.app_header')
        <div class="app-main">
            @include('partials.app_sidebar')
            <div class="app-main__outer">
                @yield('content')
                @include('partials.app_footer')
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Happy Flight - 26-03-2022 - 08:00 AM</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Available Pilots </label>
                                <select name="" id="" class="form-control">
                                    <option value="">Tom Cruise</option>
                                    <option value="">Vin Diesel</option>
                                    <option value="">Jason Stathem</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Assign</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.js"
            integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
            crossorigin="anonymous"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/main.js')}}"></script>
    <script src="{{asset('auth/assets/scripts/file-input/sortable.js')}}" type="text/javascript"></script>
    <script src="{{asset('auth/assets/scripts/file-input/fileinput.js')}}" type="text/javascript"></script>
    <script src="{{asset('auth/assets/scripts/file-input/theme.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/jquery.tagsinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('auth/assets/scripts/functions.js')}}"></script>
    <script type="text/javascript" src="{{asset('auth/assets/graph.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('script/calendar.min.js')}}"></script>


    @yield('script')
    {{--<script>--}}
    {{--$(document).ready(function () {--}}
    {{--$("#file-upload-demo,#file-upload").fileinput({--}}
    {{--'theme': 'explorer',--}}
    {{--// 'uploadUrl': '#',--}}
    {{--overwriteInitial: false,--}}
    {{--});--}}
    {{--});--}}
    {{--</script>--}}

    {{--<script>--}}
    {{--$(document).on('click', '.fc-daygrid-day-frame,.cross-pop', function () {--}}
    {{--$('.calender-details').toggleClass('active');--}}
    {{--});--}}
    {{--</script>--}}
    {{--<script>--}}

    {{--document.addEventListener('DOMContentLoaded', function () {--}}
    {{--var calendarEl = document.getElementById('flight-booking-calendar');--}}

    {{--var calendar = new FullCalendar.Calendar(calendarEl, {--}}
    {{--headerToolbar: {--}}
    {{--left: 'prev,next today',--}}
    {{--center: 'title',--}}
    {{--right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'--}}
    {{--},--}}
    {{--navLinks: true, // can click day/week names to navigate views--}}
    {{--businessHours: true, // display business hours--}}
    {{--editable: true,--}}
    {{--selectable: true,--}}
    {{--events: [--}}
    {{--{--}}
    {{--title: 'Available Slots',--}}
    {{--start: '2022-03-03',--}}
    {{--constraint: 'businessHours',--}}
    {{--color: '#257e4a'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Booked Sots',--}}
    {{--start: '2022-03-13',--}}
    {{--constraint: 'availableForMeeting',--}}
    {{--color: '#b68812'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Unavailable Slots',--}}
    {{--start: '2022-03-18',--}}
    {{--end: '#FF0000'--}}
    {{--},--}}
    {{--]--}}
    {{--});--}}

    {{--calendar.render();--}}
    {{--});--}}

    {{--</script>--}}
    {{--<script>--}}
    {{--document.addEventListener('DOMContentLoaded', function () {--}}

    {{--var calendarE2 = document.getElementById('pilot-availability-calendar');--}}
    {{--var calendar = new FullCalendar.Calendar(calendarE2, {--}}
    {{--headerToolbar: {--}}
    {{--left: 'prev,next today',--}}
    {{--center: 'title',--}}
    {{--right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'--}}
    {{--},--}}
    {{--navLinks: true, // can click day/week names to navigate views--}}
    {{--businessHours: true, // display business hours--}}
    {{--editable: true,--}}
    {{--selectable: true,--}}
    {{--events: [--}}
    {{--{--}}
    {{--title: 'Available Slots',--}}
    {{--start: '2022-03-03',--}}
    {{--constraint: 'businessHours',--}}
    {{--color: '#257e4a'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Booked Sots',--}}
    {{--start: '2022-03-13',--}}
    {{--constraint: 'availableForMeeting',--}}
    {{--color: '#b68812'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Unavailable Slots',--}}
    {{--start: '2022-03-18',--}}
    {{--end: '#FF0000'--}}
    {{--},--}}
    {{--]--}}
    {{--});--}}

    {{--calendar.render();--}}
    {{--});--}}
    {{--</script>--}}
    {{--<script>--}}
    {{--document.addEventListener('DOMContentLoaded', function () {--}}

    {{--var calendarE3 = document.getElementById('pilot-booking-calendar');--}}
    {{--var calendar = new FullCalendar.Calendar(calendarE3, {--}}
    {{--headerToolbar: {--}}
    {{--left: 'prev,next today',--}}
    {{--center: 'title',--}}
    {{--right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'--}}
    {{--},--}}
    {{--navLinks: true, // can click day/week names to navigate views--}}
    {{--businessHours: true, // display business hours--}}
    {{--editable: true,--}}
    {{--selectable: true,--}}
    {{--events: [--}}
    {{--{--}}
    {{--title: 'Select Slots',--}}
    {{--start: '2022-03-03',--}}
    {{--constraint: 'businessHours',--}}
    {{--color: '#257e4a'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Selected Slots',--}}
    {{--start: '2022-03-13',--}}
    {{--constraint: 'availableForMeeting',--}}
    {{--color: '#b68812'--}}
    {{--},--}}
    {{--{--}}
    {{--title: 'Assigned Slots',--}}
    {{--start: '2022-03-18',--}}
    {{--end: '#FF0000'--}}
    {{--},--}}
    {{--]--}}
    {{--});--}}

    {{--calendar.render();--}}
    {{--});--}}
    {{--</script>--}}
</div>


</body>
</html>
