@extends('layouts.front')

@section('content')
    <div class="fpms-main-wrapper">
        <header id="fpms-header" class="fpms-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a href="" class=""><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
            </div>
        </header>
        <!--// Main Content \\-->
        <div class="fpms-main-content">
            <!--// Main Section \\-->
            <div class="fpms-main-section">
                <div class="container">
                    <div class="detail-wrapper-full">
                        <div class="row">
                            <div class="col-md-6">
                                <img class="detail-image" src="images/img-1.webp" alt="detail image">
                            </div>
                            <div class="col-md-6">
                                <div class="detail-wrapper-table">
                                    <table class="product-table">
                                        <tbody>
                                        <tr>
                                            <th>Enthalten</th>
                                            <td>
                                                <p>Flug, Ausrüstung, Versicherung</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Nicht enthalten</th>
                                            <td>
                                                <p>Seilbahn Ticket</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Dauer</th>
                                            <td>1 Stunde</td>
                                        </tr>
                                        <tr>
                                            <th>Teilnehmer</th>
                                            <td>Zuschauer kostenfrei</td>
                                        </tr>
                                        <tr>
                                            <th>Wichtige Informationen</th>
                                            <td>
                                                <p>Sollte an deinem Wunschtermin wegen den vorherrschenden
                                                    Wetterbedingungen kein sicheren Flug möglich sein, melden wir uns
                                                    telefonisch einen Tag im voraus. Sicher finden wir gemeinsam einen
                                                    neuen Flugtermin.</p>
                                                <p>Ist dies nicht möglich, stellen wir dir gerne einen Gutschein aus,
                                                    welcher zu einem späteren Zeitpunkt bei uns eingelöst werden
                                                    kann.</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="detail-wrapper">
                                    <section>
                                        <h2>Tandem Gleitflug</h2>
                                        <p>Das „Einsteiger-Erlebnis“ für Gäste, die das Tandemfliegen kennenlernen und
                                            die grandiose Region Achensee aus der Luft genießen möchten.</p>
                                        <p><strong>Mitzubringen:</strong>Wetterangepasste winddichte Kleidung und gutes
                                            Schuhwerk für einen sicheren Anlauf beim Start.</p>
                                        <p>Du magst es eher gemütlich, du hast noch keine Flugerfahrung.</p>
                                        <p>Dann ist der Gleitflug für dich das Richtige.</p>
                                        <p>Unsere Tandem-Gleitflüge finden hauptsächlich bei ruhigen Flugbedingungen
                                            statt, und wir gleiten gemeinsam vom Startplatz zum Landeplatz. Die Flugzeit
                                            beträgt ca. 15 Min. Gesamtdauer mit Bergfahrt und Vorbereitung ca. 1 bis
                                            1,5h.</p>
                                        <p>Die beste Zeit für einen entspannten Gleitflug bietet der Vormittag, von
                                            8.00h - 11.00h</p>
                                    </section>
                                    <section>
                                        <h2>Weitere Informationen</h2>
                                        <strong>Tandemfliegen: Warum nur davon träumen?</strong>
                                        <span>Preis pro Person 129 €</span>
                                        <span>Gesamtdauer ca. 70 Minuten</span>
                                        <span>Flugdauer circa 12-15 Minuten</span>
                                        <br>
                                        <p>Alle Tandemflug Preise verstehen sich inklusive Ausrüstung & Versicherung -
                                            exklusive der Kosten für die Bergfahrt.</p>
                                        <p>Diverse Foto und Videopakete können vor Ort beim Piloten gebucht werden und
                                            sind nicht im Preis inbegriffen.</p>
                                        <p>Die angegebenen Flugzeiten sind Richtzeiten und von den vorherrschenden
                                            Wetterverhältnissen abhängig. Unsere Piloten werden jedoch immer bemüht
                                            sein, den Flug durch das Nutzen von Aufwinden zu verlängern.</p>
                                        <strong>Kleidung</strong>
                                        <p>Bitte tragen Sie den Wetterbedingungen gerechte, warme & vorzugsweise
                                            winddichte Kleidung</p>
                                        <strong>Was bei schlechtem Wetter?</strong>
                                        <p>Bei schlechtem Wetter erhältst du einen Gutschein im Wert des Fluges, den du
                                            jederzeit zu einem späteren Termin einlösen kannst.</p>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->

            <!--// Main Section \\-->
            <div class="fpms-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="fullcalendar"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--// Main Section \\-->
        </div>
        <!--// Main Content \\-->
        <div class="calender-details">
            <i class="fa fa-times cross-pop"></i>
            <div class="calender-content">
                <h2 class="calender-title">Available Slots</h2>
                <section class='slots'><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label></section><section class='option-wrap'><h3>Options</h3><select class='form-control'><option style='display:none;'></option><option>Einzelticket</option></select></section><section class='total-wrap'><span>Gleitflug: <span>129,00 € <select class='form-control'><option>1</option><option>2</option><option>3</option></select></span></span><strong>Gesamtsumme: <span>387,00 €</span></strong><a href='#' class='simple-btn'>In den Warenkorb</a>
                <hr>
                <h2 class="calender-title">Booked Slots</h2>
                <section class='slots'><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label></section>
                <hr>
                <h2 class="calender-title">Unavailable Slots</h2>
                <section class='slots'><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label><label><input name='selectDate' type='radio'/><span>8:00 AM</span></label></section>
            </div>
        </div>
        <!--// Footer \\-->
        <footer id="fpms-footer" class="fpms-footer-one">
            <!--// Copyright \\-->
            <!-- <div class="fpms-copyright">
                <a href="javascript:void(0)" class=" top-btn"></a>
                <div class="fpms-table">
                    <div class="fpms-table-cell">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><i class="fa fa-copyright"></i> 2020 - All Rights Reserved <a target="_blank" href="http://www.softenica.com/">Softenica Technologies</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--// Copyright \\-->
        </footer>
        <!--// Footer \\-->
        <div class="clearfix"></div>
    </div>
@endsection

@section('script')
<script>
    $(document).on('click','.fc-daygrid-day-frame,.cross-pop', function () {
        $('.calender-details').toggleClass('active');
    });
</script>
    <script>

  document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('fullcalendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      navLinks: true, // can click day/week names to navigate views
      businessHours: true, // display business hours
      editable: true,
      selectable: true,
      events: [
        {
          title: 'Available Slots',
          start: '2022-03-03',
          constraint: 'businessHours',
          color: '#257e4a'
        },
        {
          title: 'Booked Sots',
          start: '2022-03-13',
          constraint: 'availableForMeeting',
          color: '#b68812'
        },
        {
          title: 'Unavailable Slots',
          start: '2022-03-18',
          end: '#FF0000'
        },
      ]
    });

    calendar.render();
  });

</script>
@endsection
