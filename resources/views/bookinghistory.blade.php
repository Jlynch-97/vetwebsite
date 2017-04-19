@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Appointments</div>  
            </div>
        </div>
    </div>

    <div class="row">
    <!-- used https://scotch.io/tutorials/simple-laravel-crud-with-resource-controllers -->
    	<div class="col-md-8 col-md-offset-2">
    		<hr>
            @if(isset($appointment))
    		<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Animal ID</td>
            <td>Keeper ID</td>
            <td>Consultant ID</td>
            <td>Appointment Type</td>
            <td>Date</td>
            <td>Time</td>
        </tr>
    </thead>
    <tbody>
    @foreach($appointment as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->animalID }}</td>
            <td>{{ $value->keeperID }}</td>
            <td>{{ $value->consultantID }}</td>
            <td>{{ $value->appointmentType }}</td>
            <td>{{ $value->date }}</td>
            <td>{{ $value->time }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
@endif
    </div>
   </div>
</div>
@endsection