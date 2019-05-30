@extends('adminlte::page')

@section('content')
{{-- <div class="container"> --}}
<h1 class="title" style="margin-top:0;">All Vehicles</h1>

<!-- Sva Vozila -->
{{-- {{ $vehicle->modelOfVehicle::with('makeOfVehicle')->get() }} --}}

{{-- @foreach($vehicles as $vehicle)
<a href="{{ url('vehicles/' .$vehicle->id) }}">
  <ul>
    <li> {{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }} - {{ $vehicle->modelOfVehicle['name'] }}</li>
  </ul>
</a>
 @endforeach --}}


 

 <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem;">
  <thead>
      <tr>
          <th>Manufacturer</th>
          <th>Model</th>
          <th>Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($vehicles as $vehicle)
      <tr>
          <td>{{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }}</td>
          <td>{{ $vehicle->modelOfVehicle['name'] }}</td>
          <td>
              <a href="{{ url('vehicles/' .$vehicle->id) }}">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
              </a>
            <button class="edit-modal btn btn-info"
            data-info="{{$vehicle->id}},{{$vehicle->type}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
        <button class="delete-modal btn btn-danger"
            data-info="{{$vehicle->id}},{{$vehicle->type}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
        </a>
      </tr>
      {{-- <a href="{{ url('vehicles/' .$vehicle->id) }}"></a> --}} <!-- LINK ZA JEDNO VOZILO -->
      @endforeach
  </tbody>
</table>
    

{{-- $marka->names
$marka->vehicle->name

$model->marka->vehicle->name --}}

{{-- </div> --}}




@endsection