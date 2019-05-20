@extends('layout')

@section('title', 'Dashboard')

@section('content')
    <h1>Vehicles</h1>

    @foreach($vehicles as $vehicle)

        <li>{{ $vehicle->make }} {{ $vehicle->model }}, @if ($vehicle->status)
            <?php echo "Dostupan"; ?>
        @endif</li>

    @endforeach
@endsection
