@extends('layouts.master')

@section('content')

    <div class="app-main__inner">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                    class="pe-7s-paper-plane mr-3 text-muted opacity-6"
                    style="font-size: 35px; color: #b68812 !important;"> </i>Search Flight Bookings
            </div>
        </div>
        <div class="tabs-animation">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-body">
                            <form>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Flight</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Gleitflug</option>
                                                <option value="">Happy Flug</option>
                                                <option value="">Action flight</option>
                                                <option value="">Über den Gipfel</option>
                                                <option value="">Romantikflug</option>
                                                <option value="">Bergwelt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Slot</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">All Slots</option>
                                                <option value="">08:45</option>
                                                <option value="">10:00</option>
                                                <option value="">11:15</option>
                                                <option value="">12:30</option>
                                                <option value="">15:00</option>
                                                <option value="">16:15</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Type</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">Upcoming Flights</option>
                                                <option value="">Past Flights</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Search Booking</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                    class="pe-7s-paper-plane mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Booking
                                Details
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tr>
                                        <th>Date</th>
                                        <th>Slot</th>
                                        <th>Flight</th>
                                        <th>User Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Flight Type</th>
                                    </tr>
                                    <tr>
                                        <td>10/03/2022</td>
                                        <td>08:00 AM</td>
                                        <td>Happy Flug</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>John@doe.com</td>
                                        <td>Upcoming</td>
                                    </tr>
                                    <tr>
                                        <td>10/03/2022</td>
                                        <td>08:00 AM</td>
                                        <td>Happy Flug</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>John@doe.com</td>
                                        <td>Upcoming</td>
                                    </tr>
                                    <tr>
                                        <td>10/03/2022</td>
                                        <td>08:00 AM</td>
                                        <td>Happy Flug</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>John@doe.com</td>
                                        <td>Upcoming</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                    class="pe-7s-paper-plane mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Bookings
                                Overview
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Select Month</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">Jan</option>
                                            <option value="">Feb</option>
                                            <option value="">Mar</option>
                                            <option value="">Apr</option>
                                            <option value="">May</option>
                                            <option value="">Jane</option>
                                            <option value="">July</option>
                                            <option value="">Aug</option>
                                            <option value="">Sep</option>
                                            <option value="">Oct</option>
                                            <option value="">Nov</option>
                                            <option value="">Dec</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>Select Year</label>
                                        <select name="" id="" class="form-control">
                                            <option value="">2022</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div id="graph"></div>
                            <div class="date-show">
                                <span>March</span> - <span>2022</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@section('script')
    <script>
        $('#graph').graphify({
            options: false,
            start: 'linear',
            obj: {
                id: '1',
                width: 1535,
                height: 375,
                xGrid: false,
                legend: false,
                title: 'Flights',
                points: [
                    [0, 26, 33, 74, 12, 49, 18, 12, 49, 18, 0, 26, 33, 74, 12, 49, 18, 12, 49, 18, 0, 26, 33, 74, 12, 49, 18, 12, 49, 18,]
                ],
                pointRadius: 3,
                colors: ['#b68812'],
                xDist: 90,
                dataNames: ['Flights'],
                tooltipWidth: 15,
                animations: true,
                pointAnimation: true,
                averagePointRadius: 10,
                design: {
                    tooltipColor: '#fff',
                    gridColor: 'grey',
                    pointColor: 'green',
                    lineStrokeColor: 'grey',
                }
            }
        });
    </script>
@endsection
