@extends('layout')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="section">

  
    <h1 class="title">Edit Vehicle </h1>


    <form method="POST" action="/vehicle/{{ $vehicle->vehicle_id }}" style="margin-bottom: 1rem">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label for="make" class="label">Make</label>

            <div class="control">
                <input type="text" class="input" name="make" placeholder="{{ $vehicle->make }}">
            </div>
        </div>

        <div class="field">
            <label for="model" class="label">Model</label>

            <div class="control">
                <input type="text" class="input" name="model" placeholder="{{ $vehicle->model }}">
            </div>
        </div>

        <div class="field">
            <label for="type" class="label">Type</label>

            <div class="control">
                <input type="text" class="input" name="type" placeholder="{{ $vehicle->type }}">
            </div>
        </div>

        <div class="field">
            <label for="power" class="label">Power (kW)</label>

            <div class="control">
                <input type="text" class="input" name="power" placeholder="{{ $vehicle->engine_power }}">
            </div>
        </div>

        <div class="field">
            <label for="doors" class="label">Doors</label>

            <div class="control">
                <input type="text" class="input" name="doors" placeholder="{{ $vehicle->door_number }}">
            </div>
        </div>
     
        <div class="field">
            <label for="description" class="label">Description</label>

            <div class="control">
                <textarea name="description" class="textarea"></textarea>
            </div>
        </div>

        <div class="field">
            <label for="auto_ac" class="label">Auto AC</label>

            <div class="control">
            <input type="checkbox" name="auto_ac" value='1'>
            </div>
        </div>

        <div class="field">
            <label for="status" class="label">Status</label>

            <div class="control">
            <input type="checkbox" name="status" value='1'>
            </div>
        </div>


        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>

    </form>
    
<form method="POST" action="/vehicles/{{ $vehicle->vehicle_id }}" style="margin-bottom: 1rem">
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