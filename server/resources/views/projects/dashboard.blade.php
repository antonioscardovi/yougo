@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

    @foreach($vehicles as $vehicle)

        <li>{{ $vehicle->make }} {{ $vehicle->model }}, {{ $vehicle->status }}</li>

    @endforeach
@endsection