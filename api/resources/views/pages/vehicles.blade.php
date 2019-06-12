@extends('adminlte::page')

@section('content')

<?php  
    $doors = [2,3,4,5];
    $types = ['Hatchback', 'Sedan', 'SUV', 'Sport', 'Wagon', 'Coupe', 'Compact', 'Crossover', 'Van'];
    $gears = ['Automatic', 'Manual'];
    $ACs = ['Yes', 'No'];
?>

<h1 class="title" style="margin-top:0;">Vehicles</h1>
<hr>
 <table id="table1" class="display cell-border table table-striped table-bordered table-responsive" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
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
            {{-- <button class="btn btn-primary" data-vehicleid={{$vehicle->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button> --}}

            <a href="vehicles/{{ $vehicle->id }}">
              <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
            </a>
            

            <a href="vehicles/{{$vehicle->id}}/edit">
            <button class="edit-modal btn btn-info" data-toggle="edit-modal" data-target="#myModal"
            data-info="{{$vehicle->id}},{{$vehicle->type}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
            </a>

            {{-- <button class="btn btn-info" data-mymodel="{{$vehicle->model}}" data-mytype="{{$vehicle->type}}" data-mydoor_number="{{$vehicle->door_number}}" data-mygearbox="{{$vehicle->gearbox}}" data-myauto_ac="{{$vehicle->auto_ac}}" data-myengine_power="{{$vehicle->engine_power}}" data-myprice="{{$vehicle->price}}" data-mydescription="{{$vehicle->description}}" data-vehicleid="{{$vehicle->id}}" data-toggle="modal" data-target="#edit"><span class="glyphicon glyphicon-edit"></span> Edit</button> --}}
    
        {{-- <button class="btn btn-danger" data-vehicleid={{$vehicle->id}} data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</button> --}}

        <form method="POST" action="/vehicles/{{ $vehicle->id }}" style="display:inline;">
          @method('DELETE')
          @csrf
             <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
      </form>

      
 
          </td>
      </tr>
      @endforeach
  </tbody>
</table>



@endsection

