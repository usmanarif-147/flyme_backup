@extends('layouts.master')
@section('content')
    <div class="app-main__inner">
        <div class="card-header-tab card-header">
            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                        class="pe-7s-users mr-3 text-muted opacity-6"
                        style="font-size: 35px; color: #b68812 !important;"> </i>Add New Pilot
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
                                            <label>Name</label>
                                            <input type="text" class="form-control" placeholder="Type here...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control" placeholder="Type here...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="text" class="form-control" placeholder="Type here...">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" placeholder="Type here...">
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary pull-right">Add New Pilot</button>
                                <div class="clearfix"></div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3">
                        <div class="card-header-tab card-header">
                            <div class="card-header-title font-size-lg text-capitalize font-weight-normal"><i
                                        class="pe-7s-users mr-3 text-muted opacity-6" style="font-size: 35px;"> </i>Pilots
                                List
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="search-list">
                                <ul>
                                    <li>
                                        <input type="text" placeholder="Pilot Name" class="form-control">
                                    </li>
                                    <li>
                                        <input type="text" placeholder="Email" class="form-control">
                                    </li>
                                    <li>
                                        <select name="" id="" class="form-control">
                                            <option value="">Account Status</option>
                                            <option value="">Active</option>
                                            <option value="">Deactivated</option>
                                        </select>
                                    </li>
                                    <li><input type="submit" value="Search"></li>
                                </ul>
                            </div>
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th>Pilot Name</th>
                                        <th>Phone Number</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Account Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>0123456789</td>
                                        <td>example@gmail.com</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Active</td>
                                        <td>
                                            <a href="#exampleModal" data-toggle="modal" class="tag">Edit</a>
                                            <a href="javascript:void(0)" class="tag">Deactivate</a>
                                            <a href="{{route('admin.pilot.details')}}" class="tag">View Calendar</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>John Doe</td>
                                        <td>0123456789</td>
                                        <td>example@gmail.com</td>
                                        <td>Lorem Ipsum</td>
                                        <td>Deactivated</td>
                                        <td><a href="#exampleModal" data-toggle="modal" class="tag">Edit</a>
                                            <a href="javascript:void(0)" class="tag">Deactivate</a>
                                            <a href="{{route('admin.pilot.details')}}" class="tag">View Calendar</a>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
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
