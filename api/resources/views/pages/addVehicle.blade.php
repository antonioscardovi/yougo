    @extends('layouts.layout')

    @section('content')

    <div class="container">
        <div class="section">
    <h1 class="title">Insert a New Car</h1>
    <form method="POST" action="{{ route('vehicles.store') }}" >
    {{ csrf_field() }}

        <div>
            <label for="make_id">Manufacturer</label>
            <input type="text" name="make_id" class="input {{ $errors->has('make') ? 'is-danger' : '' }} " placeholder="Enter Manufacturer">
        </div>

        @if ($errors->has('make_id'))
        <div>
        {{ $errors->first('make_id') }}
        </div>
        @endif

        <div>
            <label for="model">Model</label>
            <input type="text" name="model" class="input {{ $errors->has('model') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('model')) {{ $errors->first('model') }} @else Enter Model  @endif">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" class="input {{ $errors->has('type') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('type')) {{ $errors->first('type') }} @else Enter Type  @endif">
        </div>
        <div>
            <label for="engine_power">Engine Power</label>
            <input type="text" name="engine_power" class="input {{ $errors->has('engine_power') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('engine_power')) {{ $errors->first('engine_power') }} @else Enter Engine Power:format/100 kw  @endif">
        </div>
        <div>
            <label for="door_number">Door Number</label>
            <input type="text" name="door_number" class="input {{ $errors->has('door_number') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('door_number')) {{ $errors->first('door_number') }} @else Number of Doors  @endif">
        </div>
        <div>
        <label for="auto-ac">
            <input type="checkbox" name="auto_ac" value='1'>
            Auto AC
        </label>
        </div>
        <div>
        <label for="status">
            <input type="checkbox" name="status" value='1'>
            Available
        </label>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="@if ($errors->has('description')) {{ $errors->first('description') }} @else Short Description  @endif"></textarea>
        </div>
        <div>
            <button type="submit" class="button is-link" style="margin-top: 1rem;">Submit</button>
            {{-- DODATI FIELD ZA CIJENU --}}
        </div>


    </form>
</div>
    </div>

    @endsection