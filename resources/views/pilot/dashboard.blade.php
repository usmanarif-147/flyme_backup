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
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                <i class="pe-7s-paper-plane mr-3 text-muted opacity-6"
                                   style="font-size: 35px; color: #b68812 !important;"> </i>
                                Pilot Availability and Booking Calendar
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="pilot-booking-calendar"></div>
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
        <h2 style="color: black" id="popup-date"> Date </h2>
        <input type="hidden" id="slot_date">
        <div class="select-slots-div">
            <h2 class="calender-title" id="select_title">Select Slots</h2>
            <section class='admin-total-wrap' id="first_section">
                <strong>Slot 1: </strong>
                <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>9:00 AM</span>
                </label>
            </span>
                <span class='assign'>
                <select class='form-control' id="first_slot">
                    <option value="">Select</option>
                    <option value="09:00">Mark As Available</option>
                </select>
            </span>
            </section>
            <section class='admin-total-wrap' id="second_section">
                <strong>Slot 2: </strong>
                <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>10:00 AM</span>
                </label>
            </span>
                <span class='assign'>
                <select class='form-control' id="second_slot">
                    <option value="">Select</option>
                    <option value="10:00">Mark As Available</option>
                </select>
            </span>
            </section>
            <section class='admin-total-wrap' id="third_section">
                <strong>Slot 3: </strong>
                <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>2:00 PM</span>
                </label>
            </span>
                <span class='assign'>
                <select class='form-control' id="third_slot">
                    <option value="">Select</option>
                    <option value="14:00">Mark As Available</option>
                </select>
            </span>
            </section>
            <section class='admin-total-wrap' id="save_slot_btn">
                <button class="btn btn-primary" id="save-slot"> Save Slots</button>
            </section>
        </div>

        <div id="hr_one">

        </div>


        {{----------------------------------------------------Selected Slots-------------------------------------------}}

        <div class="selected_slots_div">
            <h2 class="calender-title" id="selected_title">Selected Slots</h2>
            <div id="pilot-selected-slots">
                <section class='admin-total-wrap' id="selected_first_section">
                    <strong>Slot 1: </strong>
                    <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>9:00 AM</span>
                </label>
            </span>
                    <span class='assign'>
                <select class='form-control' id="selected_first_slot">
                    <option value="">Select</option>
                    <option value="09:00">Mark As Unavailable</option>
                </select>
            </span>
                </section>
                <section class='admin-total-wrap' id="selected_second_section">
                    <strong>Slot 2: </strong>
                    <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>10:00 AM</span>
                </label>
            </span>
                    <span class='assign'>
                <select class='form-control' id="selected_second_slot">
                    <option value="">Select</option>
                    <option value="10:00">Mark As Unavailable</option>
                </select>
            </span>
                </section>
                <section class='admin-total-wrap' id="selected_third_section">
                    <strong>Slot 3: </strong>
                    <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>14:00 PM</span>
                </label>
            </span>
                    <span class='assign'>
                <select class='form-control' id="selected_third_slot">
                    <option value="">Select</option>
                    <option value="14:00">Mark As Unavailable</option>
                </select>
            </span>
                </section>
                <section class='admin-total-wrap' id="remove_slot_btn">
                    <button class="btn btn-danger" id="remove-slot"> Remove Slots</button>
                </section>
            </div>

            <hr>
        </div>


        {{----------------------------------------------------Assigned Slots-------------------------------------------}}
        <h2 class="calender-title">Assigned Slots</h2>
        <section class='admin-total-wrap'>
            <strong>Gleitflug: </strong>
            <span class='slots'>
                <label><input name='selectDate' type='radio'/>
                    <span>10:00 AM</span>
                </label>
            </span>
        </section>
        <section class='admin-total-wrap'>
            <strong>Happy Flug: </strong>
            <span class='slots'>
                <label><input name='selectDate' type='radio'/>
                    <span>2:00 PM</span>
                </label>
            </span>
        </section>
        <section class='admin-total-wrap'>
            <strong>Über den Gipfel: </strong>
            <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00</span>
                </label>
            </span>
        </section>
        <section class='admin-total-wrap'>
            <strong>Actionflug: </strong>
            <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00</span>
                </label>
            </span>
        </section>
        <section class='admin-total-wrap'>
            <strong>Bergwelt Panoramaflug: </strong>
            <span class='slots'>
                <label>
                    <input name='selectDate' type='radio'/>
                    <span>8:00</span>
                </label>
            </span>
        </section>
    </div>
</div>
@section('script')

    <script>
        let calendar = "";
        document.addEventListener('DOMContentLoaded', function () {
            let calendarEl = document.getElementById('pilot-booking-calendar');
            let slots = @json($slots);
            calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                navLinks: true, // can click day/week names to navigate views
                editable: false,
                selectable: true,
                dayMaxEvents: true,
                showNonCurrentDates: false,
                businessHours: true,
                weekends: false,
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
                    $('#slot_date').val(today);

                    // let display = new Date();
                    $('#popup-date').html(moment(arg.start).format('MMMM-DD-YYYY'));
                    $.ajax({
                        url: "{{route('pilot.get.selected.slots')}}",
                        method: 'post',
                        data: {
                            _token: '{{csrf_token()}}',
                            now: today,
                        },
                        success: function (res) {
                            let first_section = $('#first_section').show();
                            let select_title = $('#select_title').show();
                            let second_section = $('#second_section').show();
                            let third_section = $('#third_section').show();
                            let save_slot_btn = $('#save_slot_btn').show();

                            let selected_first_section = $('#selected_first_section').hide();
                            let selected_title = $('#selected_title').hide();
                            let selected_second_section = $('#selected_second_section').hide();
                            let selected_third_section = $('#selected_third_section').hide();
                            let remove_slot_btn = $('#remove_slot_btn').hide();

                            for (let i = 0; i < res.length; i++) {
                                if (res[i].slot.includes('09:00')) {
                                    selected_first_section.show();
                                    first_section.hide();
                                }
                                if (res[i].slot.includes('10:00')) {
                                    selected_second_section.show();
                                    second_section.hide();
                                }
                                if (res[i].slot.includes('14:00')) {
                                    selected_third_section.show();
                                    third_section.hide();
                                }
                            }
                            if (res.length > 0) {
                                $('#hr_one').html('<hr />')
                                select_title.show();
                                selected_title.show();
                                remove_slot_btn.show();
                            }
                            if (res.length > 2) {
                                $('#hr_one').html('')
                                save_slot_btn.hide();
                                select_title.hide();
                                selected_title.show();
                            }
                            if (res.length === 0) {
                                $('#hr_one').html('')
                            }
                        }
                    })
                },
                eventTimeFormat: { // like '14:30:00'
                    hour: '2-digit',
                    minute: '2-digit',
                    meridiem: 'short'
                },
                events: slots,
                eventClassNames: ['bg-success'],
                eventContent: function(arg) {
                    return { html: '<h6 style="color: black">'+arg.event.title+'</h6>' }
                }
            });

            calendar.render();
        });

        $('#save-slot').click(function () {
            let slots = [];
            let first_slot = $('#first_slot').val();
            let second_slot = $('#second_slot').val();
            let third_slot = $('#third_slot').val();
            let slot_date = $('#slot_date').val();

            if (first_slot !== "") {
                slots.push(`${slot_date}T${first_slot}`)
            }
            if (second_slot !== "") {
                slots.push(`${slot_date}T${second_slot}`)
            }
            if (third_slot !== "") {
                slots.push(`${slot_date}T${third_slot}`)
            }
            $.ajax({
                url: "{{route('pilot.store.slot')}}",
                method: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    slots: slots,
                },
                success: function (res) {
                    if (res.status === 'exist') {
                        console.log("This slot " + res['slot'][0].date_slot + " Already booked")
                    } else {
                        window.location.reload()
                    }
                },
                error: function (res) {
                    console.log(res);
                }
            });
        })
        $('#remove-slot').click(function () {
            let slots = [];
            let first_slot = $('#selected_first_slot').val();
            let second_slot = $('#selected_second_slot').val();
            let third_slot = $('#selected_third_slot').val();
            let slot_date = $('#slot_date').val();

            if (first_slot !== "") {
                slots.push(`${slot_date}T${first_slot}`)
            }
            if (second_slot !== "") {
                slots.push(`${slot_date}T${second_slot}`)
            }
            if (third_slot !== "") {
                slots.push(`${slot_date}T${third_slot}`)
            }

            $.ajax({
                url: "{{route('pilot.remove.slot')}}",
                method: 'post',
                data: {
                    _token: '{{csrf_token()}}',
                    slots: slots,
                },
                success: function (res) {
                    window.location.reload();
                },
                error: function (res) {
                    console.log(res);
                }
            });
        })

        $(document).on('click', '.cross-pop', function () {
            $('.calender-details').toggleClass('active');
        });
    </script>

@endsection
