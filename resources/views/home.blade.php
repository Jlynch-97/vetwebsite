@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>{{ Auth::user()->username }}</strong>
                </div>
            </div>
            <div class="content">            
                <div class="links">
                    <a href="{{ url('/welcome') }}">Animal Records</a>
                    <a href="{{ url('/about') }}">Animal Bookings</a>
                    <a href="{{ url('/location') }}">Booking History</a>
                    <a href="{{ url('/contact') }}">Book New Appointment</a>
                    <a href="{{ url('/contact') }}">Edit/Cancel Appointment</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop