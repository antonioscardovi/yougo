{{-- <form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-bottom: 1rem">
    {{ method_field('PATCH') }}
    {{ csrf_field() }} --}}

    {{-- <div class="form-group">
        <label for="make" class="">Manufacturer</label>

        <div class="control">
            <input type="text" class="form-control" name="make" placeholder="{{ $vehicle->make }}">
        </div>
    </div> --}}

    <div class="form-group">
            <label for="model_id">Model</label>
            <select name="model_id" class="form-control">
                <option value="0">--Select--</option>
                @foreach($models as $model)
                    <option value="{{ $model['id'] }}" {{$vehicle->model_id == $model['id'] ? 'selected="selected"' : '' }}> {{ $model->makeOfVehicle['name'] }} {{ $model['name'] }}</option>
            @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="type">Type</label>
            <select name="type" class="form-control">
                <option value="0">--Select--</option>
                @foreach($types as $type)
                    <option value="{{ $type }}" {{$vehicle->type == $type ? 'selected="selected"' : '' }}> {{ $type }}</option>
            @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="door_number">Door Number</label>
            <select name="door_number" class="form-control">
                <option value="0">--Select--</option>
                @foreach($doors as $door)
                <option value="{{ $door }}" {{$vehicle->door_number == $door ? 'selected="selected"' : '' }}>{{ $door }}</option>   
                @endforeach
            </select>
            {{-- <input type="text" name="door_number" class="form-control {{ $errors->has('door_number') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('door_number')) {{ $errors->first('door_number') }} @else   @endif"> --}}
        </div>

        <div class="form-group">
            <label for="gearbox">Gearbox</label>
            <select name="gearbox" class="form-control">
                <option value="0">--Select--</option>
                @foreach($gears as $gearbox)
                <option value="{{ $gearbox }}" {{$vehicle->gearbox == $gearbox ? 'selected="selected"' : '' }}>{{ $gearbox }}</option>
                @endforeach
            </select>
            {{-- <input type="checkbox" name="gearbox" value="1" class="form-check-input"> --}}
        </div>


        <div class="form-group">
        <label for="auto_ac"> AC </label>
        <select name="auto_ac" class="form-control">
        <option value="0">--Select--</option>
        @foreach($ACs as $ac)
        <option value="{{ $ac }}" {{ $vehicle->auto_ac == $ac ? 'selected="selected"' : '' }}>{{ $ac }}</option>
        @endforeach
        
        </select>
        {{-- <input type="checkbox" name="auto_ac" value='1' class="form-check-input"> --}}
        </div>

        <div class="form-group">
            <label for="engine_power">Engine Power <small>(kW)</small> </label>
        <input type="text" name="engine_power" class="form-control {{ $errors->has('engine_power') ? 'is-danger' : '' }}" placeholder="@if ($errors->has('engine_power')) {{ $errors->first('engine_power') }} @else   @endif" value="{{ $vehicle->engine_power }}">
        </div>

        <div class="form-group">
            <label for="price">Price <small>(HRK)</small> </label>
            <input type="number" name="price" class="form-control" value="{{ $vehicle->price }}">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control {{ $errors->has('description') ? 'is-danger' : '' }}" name="description" placeholder="@if ($errors->has('description')) {{ $errors->first('description') }} @else  @endif" value="{{ $vehicle->description }}"></textarea>
        </div>

        {{-- <div class="form-group">
            <label for="filename">Photo(s)</label>
            <input type="file" name="filename[]" multiple class="form-control-file">
        </div>


    <div class="form-group">
        <div class="control">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div> --}}

{{-- </form> --}}