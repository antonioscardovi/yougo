@extends('adminlte::page')

@section('content')
<h1 class="title" style="margin-top:0;">Vehicles</h1>
<hr>
 <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
  <thead>
      <tr>
          <th>Manufacturer</th>
          <th>Model</th>
          <th>Type</th>
          <th>Power</th>
          <th>Doors</th>
          <th>Gearbox</th>
          <th>AC</th>
          <th>Price/per Day</th>
          <th>Availability</th>
          <th style="text-align:right;">Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($vehicles as $vehicle)
      <tr>
          <td>{{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }}</td>
          <td>{{ $vehicle->modelOfVehicle['name'] }}</td>
          <td>{{ $vehicle->type }}</td>
          <td>{{ $vehicle->engine_power }} kW</td>
          <td>{{ $vehicle->door_number }}</td>
          <td>{{ $vehicle->gearbox }}</td>
          @if($vehicle->auto_ac == "true")
              <td>Yes</td>
          @else
              <td>No</td>
          @endif
          <td>{{ $vehicle->price }} HRK</td>
          <td>{{ $vehicle->status }}</td>
          <td style="text-align:right;">
              <a href="{{ url('vehicles/' .$vehicle->id) }}">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
              </a>

            <a href="vehicles/{{$vehicle->id}}/edit">
            <button class="edit-modal btn btn-info" data-toggle="edit-modal" data-target="#myModal"
            data-info="{{$vehicle->id}},{{$vehicle->type}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
            </a>
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
@endsection