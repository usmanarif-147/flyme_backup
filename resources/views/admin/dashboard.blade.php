@extends('layouts.master')

@section('css')
    <style>
        .future {
            background: pink;
        }

        .today_change {
            background: black;
        }

        .past {
            background: lightgrey;
            color: white;
        }
    </style>
@endsection
@section('content')
    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="row">
                <div class="col-md-12 dash-boxes">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="dash-box">
                                        <a href="applied-jobs.html">
                                            <i class="pe-7s-ticket"></i>
                                            <section>
                                                <h2>10</h2>
                                                <span>Upcoming Bookings</span>
                                            </section>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="dash-box">
                                        <a href="#">
                                            <i class="pe-7s-users"></i>
                                            <section>
                                                <h2>5</h2>
                                                <span>Total Pilots</span>
                                            </section>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <div class="card-body">
                                    <div class="dash-box">
                                        <a href="#">
                                            <i class="pe-7s-note2"></i>
                                            <section>
                                                <h2>20</h2>
                                                <span>Available Slots</span>
                                            </section>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                    class="pe-7s-paper-plane mr-3 text-muted opacity-6"
                                    style="font-size: 35px; color: #b68812 !important;"> </i>Flight Booking Calendar
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="flight-booking-calendar"></div>
                        </div>
                    </div>
                </div>
                {{--                <div class="col-md-12">--}}
                {{--                    <div class="card mb-3">--}}
                {{--                        <div class="card-header-tab card-header">--}}
                {{--                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i--}}
                {{--                                    class="pe-7s-user mr-3 text-muted opacity-6"--}}
                {{--                                    style="font-size: 35px; color: #b68812 !important;"> </i>Pilot Availability Calendar--}}
                {{--                            </div>--}}
                {{--                        </div>--}}
                {{--                        <div class="card-body">--}}
                {{--                            <div id="pilot-availability-calendar"></div>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
        </div>
    </div>
@endsection
{{--<div class="calender-details">--}}
{{--    <i class="fa fa-times cross-pop"></i>--}}
{{--    <div class="calender-content">--}}
{{--        <ul class="flights-wrapper">--}}
{{--            <li>--}}
{{--                <h2 class="calender-title event-title">Gleitflug</h2>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <h2 class="calender-title event-title">Happy Flug</h2>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <h2 class="calender-title event-title">Über den Gipfel</h2>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <h2 class="calender-title event-title">Actionflug</h2>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--            </li>--}}
{{--            <li>--}}
{{--                <h2 class="calender-title event-title">Bergwelt Panoramaflug</h2>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input--}}
{{--                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select--}}
{{--                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>--}}
{{--                </section>--}}
{{--            </li>--}}
{{--        </ul>--}}
{{--        <hr>--}}
{{--        <h2 class="calender-title">Available Pilots (Pilot Availability Calendar)</h2>--}}
{{--        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input--}}
{{--                        name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate'--}}
{{--                                                                                                  type='radio'/><span>8:00 AM</span></label><label><input--}}
{{--                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>--}}
{{--        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input--}}
{{--                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>--}}
{{--        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input--}}
{{--                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>--}}
{{--        <section class='admin-total-wrap'>--}}
{{--            <strong>John Doe: </strong> --}}
{{--            <span class='slots'>--}}
{{--                <label>--}}
{{--                    <input name='selectDate' type='radio'/>--}}
{{--                    <span>8:00 AM</span>--}}
{{--                </label>--}}
{{--            </span>--}}
{{--        </section>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="calender-details">
    <i class="fa fa-times cross-pop"></i>
    <div class="calender-content">
        <ul class="flights-wrapper">
            <li>
                <h2 class="calender-title event-title">Gleitflug</h2>
                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
            </li>
            <li>
                <h2 class="calender-title event-title">Happy Flug</h2>
                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
            </li>
            <li>
                <h2 class="calender-title event-title">Über den Gipfel</h2>
                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
            </li>
            <li>
                <h2 class="calender-title event-title">Actionflug</h2>
                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
            </li>
            <li>
                <h2 class="calender-title event-title">Bergwelt Panoramaflug</h2>
                <section class='admin-total-wrap'><strong>Slot 1: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 2: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
                <section class='admin-total-wrap'><strong>Slot 3: </strong><span class='slots'><label><input
                                name='selectDate' type='radio'/><span>8:00 AM</span></label></span><span class='assign'><select
                            class='form-control'><option>Assign To</option><option>John Doe</option><option>John Doe</option></select></span>
                </section>
            </li>
        </ul>
        <hr>
        <h2 class="calender-title">Available Pilots (Pilot Availability Calendar)</h2>
        <div id="available_pilots">
            <section class='admin-total-wrap'>
                <strong>John Doe: </strong>
                <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00 AM</span>
                </label>
                    <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00 AM</span>
                </label>
                    <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00 AM</span>
                </label>
            </span>
            </section>
        </div>
    </div>
</div>

@section('script')

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let slots = @json($slots);
            var calendarE2 = document.getElementById('flight-booking-calendar');
            var calendar = new FullCalendar.Calendar(calendarE2, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                dayMaxEvents: true,
                navLinks: true, // can click day/week names to navigate views
                businessHours: true, // display business hours
                displayEventTime: false,
                showNonCurrentDates: false,
                weekends: false,
                selectable: true,
                dayCellClassNames: function (arg) {
                    if (arg.isFuture) {
                        return ['future']
                    }
                    if (arg.isPast) {
                        return ['past']
                    }
                    if (arg.isToday) {
                        return ['bg-danger']
                    }
                },
                selectAllow: function (select) {
                    return moment().diff(select.start, 'days') <= 0
                },
                select: function (arg) {
                    $('.calender-details').toggleClass('active');
                    let now = new Date(moment(arg.start, 'MM-DD-YYYY'));
                    let day = ("0" + now.getDate()).slice(-2);
                    let month = ("0" + (now.getMonth() + 1)).slice(-2);
                    let today = now.getFullYear() + "-" + (month) + "-" + (day);

                    $.ajax({
                        url: "{{route('available.pilots.ajax')}}",
                        method: 'post',
                        data: {
                            _token: '{{csrf_token()}}',
                            now: today,
                        },
                        success: function (res) {
                            let html = '';
                            console.log(res);
                            for (let i = 0; i < res.length; i++) {
                                html += "<section class='admin-total-wrap'>\n" +
                                    "                <strong>" + res[i].name + ":</strong>\n";
                                html += "<span class='slots'>\n";
                                for(let j = 0; j < res[i].availables.length; j++)
                                {
                                    html += "<label>\n" +
                                        "                    <input name='selectDate' type='radio'/>\n" +
                                        "                    <span>"+ moment(new Date(res[i].availables[j].date_slot)).format('LT') +"</span>\n" +
                                        "                </label>";
                                }
                                html += "</span>\n";
                                html += "</section>";
                            }

                            $('#available_pilots').html(html);
                        }
                    })
                },
                events: slots
            });

            calendar.render();
        });

        $(document).on('click', '.cross-pop', function () {
            $('.calender-details').toggleClass('active');
        });
    </script>
    <script>
        $(document).on('click', '.event-title', function () {
            $('.event-title').removeClass("active-event");
            $(this).addClass("active-event")
        });
    </script>
@endsection
