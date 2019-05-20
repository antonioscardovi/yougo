    @extends('layout')

    @section('content')

    <div class="container">
    <h1 class="title">Insert a New Car</h1>
    <form method="POST" action="{{ route('vehicles.store') }}" >
    {{ csrf_field() }}
        <div>
            <label for="make">Manufacturer</label>
            <input type="text" name="make" class="input" placeholder="Enter Manufacturer">
        </div>
        <div>
            <label for="model">Model</label>
            <input type="text" name="model" class="input" placeholder="Enter Model">
        </div>
        <div>
            <label for="type">Type</label>
            <input type="text" name="type" class="input" placeholder="Enter Type">
        </div>
        <div>
            <label for="engine_power">Engine Power</label>
            <input type="text" name="engine_power" class="input" placeholder="Enter Engine Power:format/100 kw">
        </div>
        <div>
            <label for="door_number">Door Number</label>
            <input type="text" name="door_number" class="input" placeholder="Number of Doors">
        </div>
        <div>
        <label for="auto-ac">
            <input type="checkbox" name="auto_ac" value=1>
            Auto AC
        </label>
        </div>
        <div>
        <label for="status">
            <input type="checkbox" name="status">
            Available
        </label>
        </div>
        <div>
            <label for="description">Description</label>
            <textarea class="textarea" name="description" placeholder="Short Description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
            {{-- DODATI FIELD ZA CIJENU --}}
        </div>
    </form>
    </div>

    @endsection
