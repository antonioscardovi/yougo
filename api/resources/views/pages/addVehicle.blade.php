    @extends('adminlte::page')

    @section('content')

    <div class="container">
        <div class="section">
    <h1 class="title">Insert a New Car</h1>
    <form method="POST" action="{{ route('vehicles.store') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

        <div class="form-group">
            <label for="make_id">Manufacturer</label>
            <input type="text" name="make_id" class="form-control {{ $errors->has('make') ? 'is-danger' : '' }} " placeholder="Enter Manufacturer">
        </div>

        @if ($errors->has('make_id'))
        <div>
        {{ $errors->first('make_id') }}
        </div>
        @endif

        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" name="model" class="form-control {{ $errors->has('model') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('model')) {{ $errors->first('model') }} @else Enter Model  @endif">
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
        <label for="auto-ac">
            <input type="checkbox" name="auto_ac" value='1'>
            Auto AC
        </label>
        </div>
        <div class="form-group">
        <label for="status">
            <input type="checkbox" name="status" value='1'>
            Available
        </label>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="@if ($errors->has('description')) {{ $errors->first('description') }} @else Short Description  @endif"></textarea>
        </div>
        <div>
            <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">Submit</button>
            {{-- DODATI FIELD ZA CIJENU --}}
        </div>


    </form>
</div>
    </div>

    @endsection