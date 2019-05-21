@extends('layout')

@section('title', 'Vehicles')

@section('content')
    <h1>All Vehicles</h1>


    @foreach($vehicles as $vehicle)

<a href="{{ url('vehicles/' .$vehicle->vehicle_id) }}"><li>{{ $vehicle->make }} {{ $vehicle->model }}</li></a>

    @endforeach
@endsection