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

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
      </div>
      <form method="POST" action="/vehicles/{{ $vehicle->id }}">
              @method('DELETE')
              {{csrf_field()}}
          <div class="modal-body">
                <p class="text-center">
                    Are you sure you want to delete this?
                </p>
                  <input type="hidden" name="vehicle_id" id="vehicle_id" value="">

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-danger">Delete</button>
          </div>
      </form>
    </div>
  </div>
</div>

  {{-- About Modal --}}
<div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Details</h4>
        </div>
        <figure class="figure" style="background: #f0f0f0; padding: 20px; text-align: center; width:400px; margin:20px auto; border-radius:15px; box-shadow: 1px 1px 5px 2px #333;">
            <h1 class="title" style="margin-top:0;">Vehicle ID: {{ $vehicle->id }}</h1>
            
            @foreach ($vehicle->images as $image)
                <?php $i = $i+1 ?> 
                <img class="figure-img img-fluid rounded" src="{{ asset($image->filename) }}" alt="" style="border: 2px solid #333; border-radius:10px; width:285px;">
                @if ($i > 1) @break @endif
            @endforeach
            <figcaption class="figure-caption">
                    <ul style="list-style: none; font-size: 2rem; text-align:left;">
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Make:</span> {{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }}</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Model:</span> {{ $vehicle->modelOfVehicle['name'] }}</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Type:</span> {{ $vehicle->type }}</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Power:</span> {{ $vehicle->engine_power }} kW</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Doors:</span> {{ $vehicle->door_number }}</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Gearbox:</span> {{ $vehicle->gearbox }}</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">AC:</span> @if ($vehicle->auto_ac == "false") No @else Yes @endif</li>
                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Price:</span> {{ $vehicle->price }} HRK</li>
                    <li><span style="font-weight:bold;">Status:</span> {{ $vehicle->status }}</li>
                    </ul>
            </figcaption>
        </figure>
        <br>
      </div>
    </div>
  </div>

  {{-- Edit Modal --}}
  <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel">Edit Vehicle</h4>
        </div>
        <form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-bottom: 1rem">
                {{method_field('patch')}}
                {{csrf_field()}}
            <div class="modal-body">
                    <input type="hidden" name="vehicle_id" id="vehicle_id" value="">
                  @include('layouts.form')
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save Changes</button>
            </div>
        </form>
      </div>
    </div>
  </div>

@endsection

