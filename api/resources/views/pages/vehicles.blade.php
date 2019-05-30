@extends('adminlte::page')

@section('content')
<div class="container">
<div class="section">
<h1 class="title">All Vehicles</h1>

<!-- Sva Vozila -->
{{-- {{ $vehicle->modelOfVehicle::with('makeOfVehicle')->get() }} --}}

@foreach($vehicles as $vehicle)
<a href="{{ url('vehicles/' .$vehicle->id) }}">
  <ul>
    <li> {{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }} - {{ $vehicle->modelOfVehicle['name'] }}</li>
  </ul>
</a>

  {{-- <a href="{{ url('vehicles/' .$vehicle->id) }}"><ul><li> {{ $vehicle->makeOfVehicles->first()['name'] }} {{ $models->get($vehicle->id)['name'] }}</li></ul></a> --}}


  @endforeach

    

{{-- $marka->names
$marka->vehicle->name

$model->marka->vehicle->name --}}

</div>
</div>



@endsection