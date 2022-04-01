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
    <div class="app-main__inner col-md-9">
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

<input type="hidden" id="date">
<div class="calender-details">
    <i class="fa fa-times cross-pop"></i>
    <div class="calender-content">
        <h2 style="color: black" id="popup-date"> Date </h2>
        <ul class="flights-wrapper">
            <li>
                <h2 class="calender-title event-title" id="gleitflug">Gleitflug</h2>
                <div class="flight-div-content" id="gleitflug-div">
                </div>
            </li>
            <li>
                <h2 class="calender-title event-title" id="happy_flug">Happy Flug</h2>
                <div class="flight-div-content" id="happy_flug-div">
                </div>
            </li>
            <li>
                <h2 class="calender-title event-title" id="uber_den_gipfel">Über den Gipfel</h2>
                <div class="flight-div-content" id="uber_den_gipfel-div">
                </div>
            </li>
            <li>
                <h2 class="calender-title event-title" id="actionflug">Actionflug</h2>
                <div class="flight-div-content" id="actionflug-div">
                </div>
            </li>
            <li>
                <h2 class="calender-title event-title" id="bergwelt_panoramaflug">Bergwelt Panoramaflug</h2>
                <div class="flight-div-content" id="bergwelt_panoramaflug-div">
                </div>
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
                contentHeight: 600,
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
                    $('.event-title').removeClass('active-event')
                    $('.flight-div-content').html('')
                    $('.calender-details').toggleClass('active');
                    let now = new Date(moment(arg.start, 'MM-DD-YYYY'));
                    let day = ("0" + now.getDate()).slice(-2);
                    let month = ("0" + (now.getMonth() + 1)).slice(-2);
                    let today = now.getFullYear() + "-" + (month) + "-" + (day);

                    $('#date').val(today);
                    $('#popup-date').html(moment(arg.start).format('MMMM-DD-YYYY'));
                    $.ajax({
                        url: "{{route('available.pilots.ajax')}}",
                        method: 'post',
                        data: {
                            _token: '{{csrf_token()}}',
                            now: today,
                        },
                        success: function (res) {
                            let html = '';
                            // console.log(res);
                            for (let i = 0; i < res.length; i++) {
                                html += "<section class='admin-total-wrap'>\n" +
                                    "                <strong>" + res[i].name + ":</strong>\n";
                                html += "<span class='slots'>\n";
                                for (let j = 0; j < res[i].availables.length; j++) {
                                    html += "<label>\n" +
                                        "                    <input name='selectDate' type='radio'/>\n" +
                                        "                    <span>" + moment(new Date(res[i].availables[j].date_slot)).format('LT') + "</span>\n" +
                                        "                </label>";
                                }
                                html += "</span>\n";
                                html += "</section>";
                            }

                            $('#available_pilots').html(html);
                        }
                    })
                },
                events: slots,
                eventClassNames: ['bg-success'],
                eventContent: function (arg) {
                    return {html: '<h6 style="color: black">' + arg.event.title + '</h6>'}
                }
            });

            calendar.render();
        });

        $(document).on('click', '.cross-pop', function () {
            $('.calender-details').toggleClass('active');
            $('.event-title').removeClass('active-event')
            $('.flight-div-content').html('')
        });

        $(document).on('click', '.event-title', function () {
            if ($(this).hasClass('active-event')) {
                let id = $(this).prop('id') + '-' + 'div';
                $("#" + id).html('')
                $(this).removeClass('active-event')
            } else {
                $('.event-title').removeClass('active-event')
                $('.flight-div-content').html('')
                $(this).addClass('active-event')
                let id = $(this).prop('id') + '-' + 'div';
                htmlContent(id);
            }
        });

        function htmlContent(id) {
            let html =
                "                 <section class='admin-total-wrap'>\n" +
                "                    <strong>Slot 1: </strong>\n" +
                "                    <span class='slots'>\n" +
                "                        <label>\n" +
                "                            <input name='selectDate' type='radio'/>\n" +
                "                            <span>09:00 AM</span>\n" +
                "                        </label>\n" +
                "                    </span>\n" +
                "                    <span class='assign'>\n" +
                "                    <div id='"+id+"_first'>\n" +
                "                        <select class='form-control' onclick=getPilots('" + id + "_first','09:00')>\n" +
                "                            <option value='first'>Assign To</option>\n" +
                "                        </select>\n" +
                "                    </div>\n" +
                "                    </span>\n" +
                "                </section>\n" +
                "                <section class='admin-total-wrap'>\n" +
                "                    <strong>Slot 2: </strong>\n" +
                "                    <span class='slots'>\n" +
                "                        <label>\n" +
                "                            <input name='selectDate' type='radio'/>\n" +
                "                            <span>10:00 AM</span>\n" +
                "                        </label>\n" +
                "                    </span>\n" +
                "                    <span class='assign'>\n" +
                "                    <div id='"+id+"_second'>\n" +
                "                        <select class='form-control' onclick=getPilots('" + id + "_second','10:00')>\n" +
                "                            <option>Assign To</option>\n" +
                "                        </select>\n" +
                "                    </div>\n" +
                "                    </span>\n" +
                "                </section>\n" +
                "                <section class='admin-total-wrap'>\n" +
                "                    <strong>Slot 3: </strong>\n" +
                "                    <span class='slots'>\n" +
                "                        <label>\n" +
                "                            <input name='selectDate' type='radio'/>\n" +
                "                            <span>14:00 PM</span>\n" +
                "                        </label>\n" +
                "                    </span>\n" +
                "                    <span class='assign'>\n" +
                "                    <div id='"+id+"_third'>\n" +
                "                        <select class='form-control' onclick=getPilots('" + id + "_third','14:00')>\n" +
                "                            <option>Assign To</option>\n" +
                "                        </select>\n" +
                "                    </div>\n" +
                "                    </span>\n" +
                "                </section>";
            $("#" + id).html(html)
        }

        function getPilots(id, time_slot) {
            let slot = "";
            let day = "";
            let time = time_slot;
            day = $('#date').val();
            time = time_slot;
            slot = `${day}T${time}`;
            // console.log(slot)
            $.ajax({
                url: "{{route('available.pilots.for.flight.ajax')}}",
                method: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    slot: slot,
                },
                success: function (res) {
                    let html = "<select class='form-control' onclick=getPilots('" + id + "_second','10:00')>\n";
                    html += "<option>Assign To</option>\n";
                    for(let i=0; i<res.length; i++)
                    {
                        html += "<option value='"+ res[i].pilot_id +"'>"+res[i].pilot_name+"</option>\n";
                    }
                    html +=  "</select>\n";
                    $('#'+id).html(html);
                    // console.log($('#'+id).html())
                },
                error: function (res) {
                    console.log(res);
                }
            });
        }
    </script>
@endsection
