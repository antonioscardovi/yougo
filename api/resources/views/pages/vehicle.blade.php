@extends('adminlte::page')

@section('content')
<div class="container">
<div class="section">
<h1 class="title">Vehicle ID: {{ $vehicle->id }}</h1>
<div class="table">
<li><span class="has-text-weight-bold">Make:</span> {{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }}</li>
<li><span class="has-text-weight-bold">Model:</span> {{ $vehicle->modelOfVehicle['name'] }}</li>
<li><span class="has-text-weight-bold">Type:</span> {{ $vehicle->type }}</li>
<li><span class="has-text-weight-bold">Power:</span> {{ $vehicle->engine_power }}</li>
<li><span class="has-text-weight-bold">Doors:</span> {{ $vehicle->door_number }}</li>
<li><span class="has-text-weight-bold">Status:</span> {{ $vehicle->status }}</li>
<a href="{{ $vehicle->id }}/edit"><button class="btn btn-primary" style="margin-top: 1rem;">Edit</button></a>
<form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-top: 1rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
</form>

</div>
</div>
</div>
@endsection

