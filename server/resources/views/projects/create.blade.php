    @extends('layout')

    @section('content')


    <div class="container">
    <h1>Insert a New Car</h1>
    <form action="/projects" method="POST"></form>
        <div>
            <input type="text" name="make" class="input" placeholder="Enter Manufacturer">
        </div>
        <div>
            <input type="text" name="model" class="input" placeholder="Enter Model">
        </div>
        <div>
            <input type="text" name="type" class="input" placeholder="Enter Type">
        </div>
        <div>
            <input type="text" name="engine_power" class="input" placeholder="Enter Engine Power:format/100 kw">
        </div>
        <div>
            <input type="text" name="door_number" class="input" placeholder="Number of Doors">
        </div>
        <div>
        <label for="auto-ac">
            <input type="checkbox" name="auto_ac">
            Auto AC
        </label>
        </div>
        <div>
        <label for="status">
            <input type="checkbox" name="status">
            Status available/not available
        </label>
        </div>
        <div>
            <textarea class="textarea" name="description" placeholder="Short Description"></textarea>
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
    </form>
    </div>

    @endsection
