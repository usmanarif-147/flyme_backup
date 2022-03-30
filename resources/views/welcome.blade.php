@extends('layouts.front')

@section('content')
    <div class="fpms-main-content">
        <!--// Main Section \\-->
        <div class="fpms-main-section filght-listing-wrap">
            <video class="flight-video" muted poster autoplay playsinline loop preload="auto"
                   src="{{asset('images/flight.mp4')}}">
                <source type="video/mp4" src="{{asset('images/flight.mp4')}}">
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fpms-titles">
                            <h2>Unsere Tandemflüge</h2>
                            <p>Wir stimmen unsere Tandemflüge individuell auf unsere Kunden ab. Solltest du in
                                unserem Angebot nicht das Passende finden oder irgendwelche Wünsche haben, dann
                                kontaktiere uns bitte gerne.</p>
                        </div>
                        <div class="fpms-filght-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <figure class="flight-image">
                                        <img src="{{asset('images/img-1.webp')}}" alt="flight image">
                                        <span>€129</span>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <div class="flights-text">
                                        <h2>Gleitflug</h2>
                                        <p>Du magst es eher gemütlich, du hast noch keine Flugerfahrung.</p>
                                        <p>Dann ist der Gleitflug für dich das Richtige.</p>
                                        <p>Unsere Tandem-Gleitflüge finden hauptsächlich bei ruhigen Flugbedingungen
                                            statt, und wir gleiten gemeinsam vom Startplatz zum Landeplatz. Die
                                            Flugzeit beträgt ca. 15 Min. Gesamtdauer mit Bergfahrt und Vorbereitung
                                            ca. 1 bis 1,5h.</p>
                                        <p>Die beste Zeit für einen entspannten Gleitflug bietet der Vormittag, von
                                            8.00h - 11.00h</p>
                                        <a href="{{route("front.flight.details")}}" class="simple-btn">Jetzt
                                            Gleitflug buchen</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="fpms-main-section filght-listing-wrap2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fpms-filght-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="flights-text">
                                        <h2>Happy Flug</h2>
                                        <p>Von manchen auch Happy Flug genannt.</p>
                                        <p>Nach dem Start nutzen wir die warme aufsteigende Luft, um uns fast
                                            lautlos nach oben zu schrauben.</p>
                                        <p>Nur der Fahrtwind und ein paar Vögel begleiten uns.</p>
                                        <p>Wenn du möchtest auch dein/e Partner/in, Freund-in oder Bekannte-r mit
                                            einem zweiten Tandemschirm.</p>
                                        <p>Die Flugzeit beträgt ca. 25Min.</p>
                                        <p>Gesamtdauer mit Bergfahrt und Vorbereitung ca. 1 bis 1,5h.</p>
                                        <p>Die beste Zeit für einen Thermikflug ist von 11.00 bis 15.00h, abhängig
                                            von Jahreszeit und Wetter.</p>
                                        <a href="{{route("front.flight.details")}}" class="simple-btn">Jetzt
                                            Gleitflug buchen</a>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <figure class="flight-image">
                                        <img src="{{asset('images/img-2.webp')}}" alt="flight image">
                                        <span>€149</span>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="fpms-main-section filght-listing-wrap filght-listing-wrap3">
            <video class="flight-video" muted poster autoplay playsinline loop preload="auto"
                   src="{{asset('images/flight.mp4')}}">
                <source type="video/mp4" src="{{asset('images/flight.mp4')}}">
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fpms-filght-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <figure class="flight-image">
                                        <img src="{{asset('images/img-3.webp')}}" alt="flight image">
                                        <span>€189</span>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <div class="flights-text">
                                        <h2>Über den Gipfel</h2>
                                        <p>Sehr beliebt bei "Wiederholungstätern" und jenen, die noch mehr "Airtime"
                                            haben wollen.</p>
                                        <p>Im Prinzip ein Thermikflug der noch länger dauert.</p>
                                        <p>Mit etwas Glück fliegen wir bei guten Bedingungen über einen der Gipfel.
                                            Einfach Spitze. Achtung Suchtgefahr!</p>
                                        <p>Die Flugzeit beträgt ca. 35 Min.</p>
                                        <p>Gesamtdauer mit Bergfahrt und Vorbereitung ca. 1,5 bis 2h.</p>
                                        <p>Die beste Zeit für einen Thermikflug Plus ist von 11.00 bis 15.00h,
                                            abhängig von Jahreszeit und Wetter.</p>
                                        <a href="{{route("front.flight.details")}}" class="simple-btn">Jetzt
                                            Gleitflug buchen</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="fpms-main-section filght-listing-wrap2">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fpms-filght-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <div class="flights-text">
                                        <h2>Actionflug</h2>
                                        <p>Du brauchst den Kick und Adrenalin wie die Luft zum Atmen?</p>
                                        <p>Du stehst auf Achterbahn und Roller-Coaster?</p>
                                        <p>Ein normaler Tandemflug langweilt dich? </p>
                                        <p>Mario beherrscht sein Gerät, hat er doch mehr als 20 Jahre als
                                            professioneller Testpilot in der Entwicklung alle Höhen und Tiefen
                                            kennengelernt. Du möchtest Action, Mario kennt das Wie.</p>
                                        <a href="{{route("front.flight.details")}}" class="simple-btn">Jetzt
                                            Gleitflug buchen</a>
                                    </div>
                                </li>
                                <li class="col-md-6">
                                    <figure class="flight-image">
                                        <img src="{{asset('images/img-4.webp')}}" alt="flight image">
                                        <span>€179</span>
                                    </figure>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
        <!--// Main Section \\-->
        <div class="fpms-main-section filght-listing-wrap filght-listing-wrap3 filght-listing-wrap4">
            <video class="flight-video" muted poster autoplay playsinline loop preload="auto"
                   src="{{asset('images/flight.mp4')}}">
                <source type="video/mp4" src="{{asset('images/flight.mp4')}}">
            </video>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="fpms-filght-listing">
                            <ul class="row">
                                <li class="col-md-6">
                                    <figure class="flight-image">
                                        <img src="{{asset('images/img-5.webp')}}" alt="flight image">
                                        <span>€279</span>
                                    </figure>
                                </li>
                                <li class="col-md-6">
                                    <div class="flights-text">
                                        <h2>Bergwelt Panoramaflug</h2>
                                        <p>Du kannst nicht genug bekommen? Du liebst das Fliegen und die Natur? Du
                                            möchtest mehr Zeit mit deiner Tandempilotin oder deinem Piloten
                                            verbringen.</p>
                                        <p>Dann kommst du am Panorama-Tandemflug nicht vorbei.</p>
                                        <p>Wir fliegen mit dir hoch über den Gipfeln des Rofan-Gebirges. Du wirst
                                            Perspektiven einnehmen, die dir neue Horizonte eröffnen. Hoch über dem
                                            Achensee queren wir das Tal und landen glücklich am Startplatz.</p>
                                        <a href="{{route("front.flight.details")}}" class="simple-btn">Jetzt
                                            Gleitflug buchen</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Main Section \\-->
    </div>
@endsection
