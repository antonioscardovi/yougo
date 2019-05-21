@extends('layout')

@section('title', 'Vehicles')

@section('content')
    <h1> Vehicle: </h1>
{{-- <p>Marka: {{ $vehicle->make }}</p> --}}


<ul>
    <li>Make: {{ $vehicle->make }}</li>
    <li>Model: {{ $vehicle->model }}</li>
    <li>Type: {{ $vehicle->type }}</li>
    <li>Power: {{ $vehicle->engine_power }}</li>
    <li>Doors: {{ $vehicle->door_number }}</li>
    <li>Auto AC: {{ $vehicle->auto_ac }}</li>
    <li>Description: {{ $vehicle->description }}</li>
    <li>Status: {{ $vehicle->status }}</li>
</ul>



@endsection