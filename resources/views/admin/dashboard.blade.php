@extends('layouts.master')

@section('css')
    <style>
        /*.fc-daygrid-day-frame {*/
        /*    background: black;*/
        /*}*/
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
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                    class="pe-7s-user mr-3 text-muted opacity-6"
                                    style="font-size: 35px; color: #b68812 !important;"> </i>Pilot Availability Calendar
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="pilot-availability-calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
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
        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input
                        name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate'
                                                                                                  type='radio'/><span>8:00 AM</span></label><label><input
                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>
        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input
                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>
        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input
                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>
        <section class='admin-total-wrap'><strong>John Doe: </strong> <span class='slots'><label><input
                        name='selectDate' type='radio'/><span>8:00 AM</span></label></span></section>
    </div>
</div>
@section('script')

    {{--    <script>--}}
    {{--        let calendar = "";--}}
    {{--        document.addEventListener('DOMContentLoaded', function () {--}}
    {{--            let calendarEl = document.getElementById('pilot-booking-calendar');--}}
    {{--            let slots = @json($slots);--}}
    {{--            calendar = new FullCalendar.Calendar(calendarEl, {--}}
    {{--                headerToolbar: {--}}
    {{--                    left: 'prev,next today',--}}
    {{--                    center: 'title',--}}
    {{--                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'--}}
    {{--                },--}}
    {{--                navLinks: true, // can click day/week names to navigate views--}}
    {{--                businessHours: true, // display business hours--}}
    {{--                editable: false,--}}
    {{--                selectable: true,--}}
    {{--                dayMaxEvents: true,--}}
    {{--                select: function (arg) {--}}
    {{--                    $('.calender-details').toggleClass('active');--}}

    {{--                    let now = new Date(moment(arg.start).format('MM-DD-YYYY'));--}}
    {{--                    let day = ("0" + now.getDate()).slice(-2);--}}
    {{--                    let month = ("0" + (now.getMonth() + 1)).slice(-2);--}}
    {{--                    let today = now.getFullYear() + "-" + (month) + "-" + (day);--}}
    {{--                    $('#slot_date').val(today);--}}

    {{--                    $.ajax({--}}
    {{--                        url: "{{route('pilot.get.selected.slots')}}",--}}
    {{--                        method: 'post',--}}
    {{--                        data: {--}}
    {{--                            _token: '{{csrf_token()}}',--}}
    {{--                            now: today,--}}
    {{--                        },--}}
    {{--                        success: function (res) {--}}

    {{--                            let first_section = $('#first_section').show();--}}
    {{--                            let select_title = $('#select_title').show();--}}
    {{--                            let second_section = $('#second_section').show();--}}
    {{--                            let third_section = $('#third_section').show();--}}
    {{--                            let save_slot_btn = $('#save_slot_btn').show();--}}

    {{--                            let selected_first_section = $('#selected_first_section').hide();--}}
    {{--                            let selected_title = $('#selected_title').hide();--}}
    {{--                            let selected_second_section = $('#selected_second_section').hide();--}}
    {{--                            let selected_third_section = $('#selected_third_section').hide();--}}
    {{--                            let remove_slot_btn = $('#remove_slot_btn').hide();--}}

    {{--                            for (let i = 0; i < res.length; i++) {--}}
    {{--                                if (res[i].slot.includes('09:00')) {--}}
    {{--                                    selected_first_section.show();--}}
    {{--                                    first_section.hide();--}}
    {{--                                }--}}
    {{--                                if (res[i].slot.includes('10:00')) {--}}
    {{--                                    selected_second_section.show();--}}
    {{--                                    second_section.hide();--}}
    {{--                                }--}}
    {{--                                if (res[i].slot.includes('14:00')) {--}}
    {{--                                    selected_third_section.show();--}}
    {{--                                    third_section.hide();--}}
    {{--                                }--}}
    {{--                            }--}}
    {{--                            if (res.length > 0) {--}}
    {{--                                $('#hr_one').html('<hr />')--}}
    {{--                                select_title.show();--}}
    {{--                                selected_title.show();--}}
    {{--                                remove_slot_btn.show();--}}
    {{--                            }--}}
    {{--                            if (res.length > 2) {--}}
    {{--                                $('#hr_one').html('')--}}
    {{--                                save_slot_btn.hide();--}}
    {{--                                select_title.hide();--}}
    {{--                                selected_title.show();--}}
    {{--                            }--}}
    {{--                            if (res.length === 0) {--}}
    {{--                                $('#hr_one').html('')--}}
    {{--                            }--}}
    {{--                        }--}}
    {{--                    })--}}
    {{--                },--}}
    {{--                eventTimeFormat: { // like '14:30:00'--}}
    {{--                    hour: '2-digit',--}}
    {{--                    minute: '2-digit',--}}
    {{--                    meridiem: 'short'--}}
    {{--                },--}}
    {{--                events: slots--}}
    {{--            });--}}

    {{--            calendar.render();--}}
    {{--        });--}}

    {{--        $('#save-slot').click(function () {--}}
    {{--            let slots = [];--}}
    {{--            let first_slot = $('#first_slot').val();--}}
    {{--            let second_slot = $('#second_slot').val();--}}
    {{--            let third_slot = $('#third_slot').val();--}}
    {{--            let slot_date = $('#slot_date').val();--}}

    {{--            if (first_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${first_slot}`)--}}
    {{--            }--}}
    {{--            if (second_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${second_slot}`)--}}
    {{--            }--}}
    {{--            if (third_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${third_slot}`)--}}
    {{--            }--}}
    {{--            $.ajax({--}}
    {{--                url: "{{route('pilot.store.slot')}}",--}}
    {{--                method: 'post',--}}
    {{--                data: {--}}
    {{--                    _token: '{{csrf_token()}}',--}}
    {{--                    slots: slots,--}}
    {{--                },--}}
    {{--                success: function (res) {--}}
    {{--                    if (res.status === 'exist') {--}}
    {{--                        console.log("This slot " + res['slot'][0].date_slot + " Already booked")--}}
    {{--                    } else {--}}
    {{--                        window.location.reload()--}}
    {{--                    }--}}
    {{--                    // window.location.reload()--}}

    {{--                    // $('.calender-details').toggleClass('active')--}}
    {{--                    // let slots = res.slots;--}}
    {{--                    // for (let i = 0; i < slots.length; i++) {--}}
    {{--                    //     calendar.addEvent({--}}
    {{--                    //         start: slots[i].date_slot,--}}
    {{--                    //         // color: slots[i].color,--}}
    {{--                    //         overlap: false,--}}
    {{--                    //         display: 'background',--}}
    {{--                    //         color: '#ff9f89'--}}
    {{--                    //         // allDay: arg.allDay--}}
    {{--                    //     })--}}
    {{--                    //     calendar.unselect()--}}
    {{--                    // }--}}

    {{--                },--}}
    {{--                error: function (res) {--}}
    {{--                    console.log(res);--}}
    {{--                }--}}
    {{--            });--}}
    {{--        })--}}
    {{--        $('#remove-slot').click(function () {--}}
    {{--            let slots = [];--}}
    {{--            let first_slot = $('#selected_first_slot').val();--}}
    {{--            let second_slot = $('#selected_second_slot').val();--}}
    {{--            let third_slot = $('#selected_third_slot').val();--}}
    {{--            let slot_date = $('#slot_date').val();--}}

    {{--            if (first_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${first_slot}`)--}}
    {{--            }--}}
    {{--            if (second_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${second_slot}`)--}}
    {{--            }--}}
    {{--            if (third_slot !== "") {--}}
    {{--                slots.push(`${slot_date}T${third_slot}`)--}}
    {{--            }--}}

    {{--            $.ajax({--}}
    {{--                url: "{{route('pilot.remove.slot')}}",--}}
    {{--                method: 'post',--}}
    {{--                data: {--}}
    {{--                    _token: '{{csrf_token()}}',--}}
    {{--                    slots: slots,--}}
    {{--                },--}}
    {{--                success: function (res) {--}}
    {{--                    console.log(res);--}}
    {{--                    window.location.reload();--}}
    {{--                    // if (res.status === 'exist') {--}}
    {{--                    //     console.log("This slot " + res['slot'][0].date_slot + " Already booked")--}}
    {{--                    // } else {--}}
    {{--                    //     window.location.reload()--}}
    {{--                    // }--}}
    {{--                    // window.location.reload()--}}

    {{--                    // $('.calender-details').toggleClass('active')--}}
    {{--                    // let slots = res.slots;--}}
    {{--                    // for (let i = 0; i < slots.length; i++) {--}}
    {{--                    //     calendar.addEvent({--}}
    {{--                    //         start: slots[i].date_slot,--}}
    {{--                    //         // color: slots[i].color,--}}
    {{--                    //         overlap: false,--}}
    {{--                    //         display: 'background',--}}
    {{--                    //         color: '#ff9f89'--}}
    {{--                    //         // allDay: arg.allDay--}}
    {{--                    //     })--}}
    {{--                    //     calendar.unselect()--}}
    {{--                    // }--}}

    {{--                },--}}
    {{--                error: function (res) {--}}
    {{--                    console.log(res);--}}
    {{--                }--}}
    {{--            });--}}
    {{--        })--}}

    {{--    </script>--}}

    {{--    <script>--}}
    {{--        $(document).on('click', '.cross-pop', function () {--}}
    {{--            $('.calender-details').toggleClass('active');--}}
    {{--        });--}}
    {{--    </script>--}}


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let slots = @json($slots);
            var calendarE2 = document.getElementById('pilot-availability-calendar');
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
                // eventDisplay: 'inverse-background',
                // eventDisplay: 'none',
                // editable: true,
                // selectable: true,
                events: slots
            });

            calendar.render();
        });
    </script>
    <script>
        $(document).on('click', '.event-title', function () {
            $('.event-title').removeClass("active-event");
            $(this).addClass("active-event")
        });
    </script>
@endsection
