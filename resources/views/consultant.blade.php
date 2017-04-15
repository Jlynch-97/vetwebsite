@extends('layouts.app')

@section('content')
<head>
</head>
<!-- Styles -->
        
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Consultant Dashboard</div>

                <div class="panel-body">
                    You are logged in as <strong>{{ Auth::user()->username }}</strong>
                </div>
            </div>
        </div>
    </div>
</div>
<body>
    <div class="content">
                <div class="title m-b-md" style="color: #636b6f;font-family: 'Raleway', sans-serif;font-weight: 100; font-size: 60px;margin-left: px;">
                    Consultant
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Animal Records</a>
                    <a href="https://laravel-news.com">Edit/Cancel Bookings</a>
                    <a href="https://forge.laravel.com">Reports</a>
                    <a href="https://github.com/laravel/laravel">Bookings</a>
                </div>
            </div>
</body>
@stop