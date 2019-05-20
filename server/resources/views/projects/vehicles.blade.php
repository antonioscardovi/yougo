@extends('layout')

@section('title', 'Vehicles')

@section('content')
    <h1>All Vehicles</h1>


    @foreach($vehicles as $vehicle)

        <li>{{ $vehicle->make }} {{ $vehicle->model }}</li>

    @endforeach
@endsection