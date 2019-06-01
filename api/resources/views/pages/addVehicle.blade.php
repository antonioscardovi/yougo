    @extends('adminlte::page')

    @section('content')

    <div class="container">
        <div class="section">
    <h1 class="title">Import New Vehicle</h1>
    <form method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

        <div class="form-group">
            <label for="make">Manufacturer</label>
            <select name="make" class="form-control">
                <option disabled selected value> Select a Manufacturer</option>
                @foreach($makes as $make)
                    <option value="{{ $make['id'] }}">{{ $make['name'] }}</option>
                    @endforeach
            </select>
        </div>

        @if ($errors->has('make'))
        <div>
        {{ $errors->first('make') }}
        </div>
        @endif

        <div class="form-group">
            <label for="model">Model</label>
            <select name="model" class="form-control">
                <option disabled selected value> Select a Model </option>
                @foreach($models as $model)
                    <option value="{{ $model }}">{{ $model['name'] }}</option>
            @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <input type="text" name="type" class="form-control {{ $errors->has('type') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('type')) {{ $errors->first('type') }} @else Enter Type  @endif">
        </div>
        <div class="form-group">
            <label for="engine_power">Engine Power</label>
            <input type="text" name="engine_power" class="form-control {{ $errors->has('engine_power') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('engine_power')) {{ $errors->first('engine_power') }} @else Enter Engine Power (kW)  @endif">
        </div>
        <div class="form-group">
            <label for="door_number">Door Number</label>
            <input type="text" name="door_number" class="form-control {{ $errors->has('door_number') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('door_number')) {{ $errors->first('door_number') }} @else Number of Doors  @endif">
        </div>

        <div class="form-group">
            <label for="gearbox" class="form-check-label">Gearbox </label>
            <input type="checkbox" name="gearbox" value="1" class="form-check-input">

        <label for="auto-ac" class="form-check-label">
            Auto AC </label>
            <input type="checkbox" name="auto_ac" value='1' class="form-check-input">
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" name="price" class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="@if ($errors->has('description')) {{ $errors->first('description') }} @else Short Description  @endif"></textarea>
        </div>

        <div class="form-group">
            <label for="picture">Photo(s)</label>
            <input type="file" name="picture" class="form-control-file">
        </div>

        <div>
            <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Submit</button>
        </div>

    </form>
</div>
    </div>

    @endsection