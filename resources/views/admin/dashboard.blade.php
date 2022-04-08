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
            </div>
        </div>
    </div>
@endsection

<input type="hidden" id="date">
<div class="calender-details">
    <i class="fa fa-times cross-pop"></i>
    <div class="calender-content">
        <h2 style="color: black" id="popup-date"> Date </h2>
        <ul class="flights-wrapper">
        </ul>
        <hr>
        <h2 class="calender-title">Available Pilots (Pilot Availability Calendar)</h2>
        <div id="available_pilots">
        </div>
    </div>
</div>

@section('script')
    <script>
        let assign_flights_array = [
            [],
            [],
            [],
            []
        ];
        let gle_arr = [];
        let happy_arr = [];
        let uber_arr = [];
        let action_arr = [];
        let berg_arr = [];
        document.addEventListener('DOMContentLoaded', function () {
            let slots = @json($slots);
            let calendarE2 = document.getElementById('flight-booking-calendar');
            let calendar = new FullCalendar.Calendar(calendarE2, {
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
                            // console.log(res.flights[0].timeslots[0].pilots)
                            let html = '';
                            let html_flights = '';
                            let pilots = res.pilots;
                            for (let i = 0; i < pilots.length; i++) {
                                html += "<section class='admin-total-wrap'>\n" +
                                    "                <strong>" + pilots[i].name + ":</strong>\n";
                                html += "<span class='slots'>\n";
                                for (let j = 0; j < pilots[i].time_slots.length; j++) {
                                    html += "<label>\n" +
                                        "                    <input name='selectDate' type='radio'/>\n" +
                                        "                    <span>" + moment(new Date(pilots[i].time_slots[j].date_slot)).format('LT') + "</span>\n" +
                                        "                </label>";
                                }
                                html += "</span>\n";
                                html += "</section>";
                            }

                            let flights = res.flights;
                            for (let i = 0; i < flights.length; i++) {
                                html_flights += "<li>\n" +
                                    "    <h2 class='calender-title event-title'>" + flights[i].name + "</h2>\n";
                                for (let j = 0; j < flights[i].timeslots.length; j++) {
                                    html_flights += "    <section class='admin-total-wrap'>\n" +
                                        "        <strong>Slot 1: </strong>\n" +
                                        "        <span class='slots'>\n" +
                                        "                <label>\n" +
                                        "                    <input name='selectDate' type='radio'/>\n" +
                                        "                    <span>" + flights[i].timeslots[j].time_slot + "</span>\n" +
                                        "                </label>\n" +
                                        "            </span>\n" +
                                        "        <span class='assign'>\n" +
                                        "                <select class='form-control select-pilot' >\n" +
                                        "                    <option value='0'>Assign To</option>\n";
                                    for (let k = 0; k < flights[i].timeslots[j].pilots.length; k++) {
                                        html_flights += "<option value='" + flights[i].id + "," +
                                            "" + flights[i].timeslots[j].id + "," +
                                            "" + flights[i].timeslots[j].pilots[k].pilot_id + "'" +
                                            ">" + flights[i].timeslots[j].pilots[k].pilot_name + "</option>\n";
                                    }
                                    html_flights += "                </select>\n" +
                                        "            </span>\n" +
                                        "    </section>\n";
                                }
                                html_flights += "</li>";
                            }
                            html_flights += '<li>\n' +
                                '                                    <button class="btn btn-primary assign-flight" id="assign-flight"> Assign Flight</button>\n' +
                                '                                </li>';
                            $('.flights-wrapper').html(html_flights)
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
            }
        });

        $(document).on('click', '#assign-flight', function () {
            alert("working");
        })

        $(document).on('change', '.select-pilot', function () {
            let arr = $(this).val().split(',');
            let firstIndex = parseInt(arr.shift()) - 1;
            let index = firstIndex;
            let value = arr.join(',')        // convert array to string

            if (firstIndex === 0) {
                gle_arr.push(value);
                for (let i = 0; i < gle_arr.length; i++) {
                    if(gle_arr[i].split(',')[0] === value.split(',')[0]){
                        alert("yes")
                    }
                    else{
                        alert("no")
                    }
                }
                // if (!gle_arr.includes(value)) {
                //     gle_arr.push(value);
                // }
                // console.log(gle_arr)
            }
            if (firstIndex === 1) {
                happy_arr.push(value);
                if (!gle_arr.includes(value)) {
                    gle_arr.push(value);
                }
                console.log(happy_arr)
            }
            if (firstIndex === 2) {
                uber_arr.push(value);
                console.log(uber_arr)
            }
            if (firstIndex === 3) {
                action_arr.push(value);
                console.log(action_arr)
            }
            if (firstIndex === 4) {
                berg_arr.push(value);
                console.log(berg_arr)
            }
            // if(assign_flights_array[index].indexOf(value) === -1) {
            //     assign_flights_array[index].push(value);
            //     console.log(assign_flights_array);
            // }
            //
            // for (let i = 0; i < assign_flights_array.length; i++) {
            //     for (let j = 0; j < assign_flights_array[i].length; j++) {
            //         console.log(assign_flights_array[i][j])
            //     }
            // }

            // console.log(assign_flights_array)
            // if (assign_flights_array.length === 0) {
            //     assign_flights_array[parseInt(arr.shift()) - 1] = [value]
            // } else {
            //
            // }
        })
    </script>

@endsection
