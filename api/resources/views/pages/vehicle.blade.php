@extends('layouts.layout')

@section('content')
<div class="section">
<h1 class="title">Vehicle ID: {{ $vehicle->id }}</h1>
<div class="table">
<li><span class="has-text-weight-bold">Make:</span> {{ $vehicle->make }}</li>
<li><span class="has-text-weight-bold">Model:</span> {{ $vehicle->model }}</li>
<li><span class="has-text-weight-bold">Type:</span> {{ $vehicle->type }}</li>
<li><span class="has-text-weight-bold">Power:</span> {{ $vehicle->engine_power }}</li>
<li><span class="has-text-weight-bold">Doors:</span> {{ $vehicle->door_number }}</li>
<a href="{{ $vehicle->id }}/edit"><button class="button is-link" style="margin-top: 1rem;">Edit</button></a>
<form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-top: 1rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="button is-danger">Delete</button>
            </div>
        </div>
</form>

</div>
</div>
@endsection

