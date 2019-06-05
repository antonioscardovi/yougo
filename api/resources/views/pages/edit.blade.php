@extends('adminlte::page')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="section">

  
    <h1 class="title">Edit Vehicle </h1>

    {{-- {{ Form::model($vehicle, array('route' => array('vehicles.edit', $vehicle->id))) }} --}}


    <form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-bottom: 1rem">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        {{-- <div class="form-group">
            <label for="make" class="">Manufacturer</label>

            <div class="control">
                <input type="text" class="form-control" name="make" placeholder="{{ $vehicle->make }}">
            </div>
        </div> --}}

        <div class="form-group">
                <label for="model_id">Model</label>
                <select name="model_id" class="form-control">
                <option disabled selected value style="display: none;"></option>
                    @foreach($models as $model)
                        <option value="{{ $model['id'] }}"> {{ $model->makeOfVehicle['name'] }} {{ $model['name'] }}</option>
                @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="type">Type</label>
                <select name="type" class="form-control">
                    <option disabled selected value style="display: none;"></option>
                    <option value="hatchback">Hatchback</option>
                    <option value="limousine">Limousine</option>
                    <option value="sport">Sport</option>
                    <option value="supersport">Supersport</option>
                    <option value="suv">SUV</option>
                    <option value="caravan">Caravan</option>
                </select>
            </div>
    
            <div class="form-group">
                <label for="door_number">Door Number</label>
                <select name="door_number" class="form-control">
                    <option disabled selected value style="display: none;"></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>
                {{-- <input type="text" name="door_number" class="form-control {{ $errors->has('door_number') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('door_number')) {{ $errors->first('door_number') }} @else   @endif"> --}}
            </div>
    
            <div class="form-group">
                <label for="gearbox">Gearbox</label>
                <select name="gearbox" class="form-control">
                    <option disabled selected value style="display: none;"></option>
                    <option value="autmoatic">Automatic</option>
                    <option value="manual">Manual</option>
                </select>
                {{-- <input type="checkbox" name="gearbox" value="1" class="form-check-input"> --}}
            </div>
    
    
            <div class="form-group">
            <label for="auto_ac"> AC </label>
            <select name="auto_ac" class="form-control">
                <option disabled selected value style="display: none;"></option>
                <option value="true">Yes</option>
                <option value="false">No</option>
            </select>
            {{-- <input type="checkbox" name="auto_ac" value='1' class="form-check-input"> --}}
            </div>
    
            <div class="form-group">
                <label for="engine_power">Engine Power <small>(kW)</small> </label>
                <input type="text" name="engine_power" class="form-control {{ $errors->has('engine_power') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('engine_power')) {{ $errors->first('engine_power') }} @else   @endif">
            </div>
    
            <div class="form-group">
                <label for="price">Price <small>(HRK)</small> </label>
                <input type="number" name="price" class="form-control">
            </div>
    
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="@if ($errors->has('description')) {{ $errors->first('description') }} @else  @endif"></textarea>
            </div>
    
            <div class="form-group">
                <label for="picture">Photo(s)</label>
                <input type="file" name="picture" class="form-control-file">
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