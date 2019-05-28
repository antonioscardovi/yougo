@extends('adminlte::page')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="section">

  
    <h1 class="title">Edit Vehicle </h1>


    <form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-bottom: 1rem">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="make" class="">Manufacturer</label>

            <div class="control">
                <input type="text" class="form-control" name="make" placeholder="{{ $vehicle->make }}">
            </div>
        </div>

        <div class="form-group">
            <label for="model" class="">Model</label>

            <div class="control">
                <input type="text" class="form-control" name="model" placeholder="{{ $vehicle->model }}">
            </div>
        </div>

        <div class="form-group">
            <label for="type" class="">Type</label>

            <div class="control">
                <input type="text" class="form-control" name="type" placeholder="{{ $vehicle->type }}">
            </div>
        </div>

        <div class="form-group">
            <label for="power" class="">Power (kW)</label>

            <div class="control">
                <input type="text" class="form-control" name="power" placeholder="{{ $vehicle->engine_power }}">
            </div>
        </div>

        <div class="form-group">
            <label for="doors" class="">Doors</label>

            <div class="control">
                <input type="text" class="form-control" name="doors" placeholder="{{ $vehicle->door_number }}">
            </div>
        </div>
     
        <div class="form-group">
            <label for="description" class="">Description</label>

            <div class="control">
                <textarea name="description" class="form-control"></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="auto_ac" class="">Auto AC</label>

            <div class="control">
            <input type="checkbox" name="auto_ac" value='1'>
            </div>
        </div>

        <div class="form-group">
            <label for="status" class="">Status</label>

            <div class="control">
            <input type="checkbox" name="status" value='1'>
            </div>
        </div>


        <div class="form-group">
            <div class="control">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
    

</div>
</div>
@endsection