@extends('layouts.master')
@section('content')

    <div class="app-main__inner">
        <div class="tabs-animation">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                        class="pe-7s-paper-plane mr-3 text-muted opacity-6"
                                        style="font-size: 35px; color: #b68812 !important;"> </i>Pilot Details Calendar
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