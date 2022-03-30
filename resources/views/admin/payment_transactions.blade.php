@extends('layouts.master')
@section('content')
    <div class="app-main__inner">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="pe-7s-cash mr-3 text-muted opacity-6" style="font-size: 35px; color: #b68812 !important;"> </i>Search Transactions</div>
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
                                            <label>Start Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>End Date</label>
                                            <input type="date" class="form-control">
                                        </div>
                                    </div>
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
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Search</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i class="pe-7s-cash mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Transaction History</div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody><tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Flight</th>
                                        <th>Slot</th>
                                        <th>Payment Method</th>
                                        <th>Amount</th>
                                        <th>Pilot</th>
                                    </tr>
                                    <tr>
                                        <td>10-03-2022</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>john@doe.com</td>
                                        <td>Happy Flug</td>
                                        <td><span>8:00 AM</span></td>
                                        <td>PayPal</td>
                                        <td>€ 189</td>
                                        <td>Tom Cruise</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2022</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>john@doe.com</td>
                                        <td>Happy Flug</td>
                                        <td><span>8:00 AM</span></td>
                                        <td>PayPal</td>
                                        <td>€ 189</td>
                                        <td>Tom Cruise</td>
                                    </tr>
                                    <tr>
                                        <td>10-03-2022</td>
                                        <td>John Doe</td>
                                        <td>(123)-123-123</td>
                                        <td>john@doe.com</td>
                                        <td>Happy Flug</td>
                                        <td><span>8:00 AM</span></td>
                                        <td>PayPal</td>
                                        <td>€ 189</td>
                                        <td>Tom Cruise</td>
                                    </tr>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
@endsection
