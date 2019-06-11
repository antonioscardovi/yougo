@extends('adminlte::page')

@section('content')
<h1 class="title" style="margin-top:0;">Reservations</h1>
<hr>

 <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
  <thead>
      <tr>
          <th>Customer</th>
          <th>Vehicle</th>
          <th style="text-align:right;">Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($reservations as $reservation)
      <tr>
      <td>{{ $reservation->customer['name'] }} {{ $reservation->customer['lastname'] }}</td>
          <td>{{ $reservation->vehicle->modelOfVehicle->makeOfVehicle['name'] }} {{ $reservation->vehicle->modelOfVehicle['name'] }}</td>
          <td style="text-align:right;">
            <button class="btn btn-primary" data-reservationid={{$reservation->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button>
            <button class="btn btn-danger" data-reservationid={{$reservation->id}} data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</button>
        </td>
      </tr>
      {{-- <a href="{{ url('reservations/' .$reservation->id) }}"></a> --}} <!-- LINK ZA JEDNO VOZILO -->
      @endforeach
  </tbody>
</table>

{{-- Delete Modal --}}
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
        </div>
        <form method="POST" action="/reservations/{{ $reservation->id }}">
                @method('DELETE')
                {{csrf_field()}}
            <div class="modal-body">
                  <p class="text-center">
                      Are you sure you want to delete this?
                  </p>
                    <input type="hidden" name="reservation_id" id="reservation_id" value="">
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
            <h1 style="margin-top:0; text-align:center;">Customer ID: {{ $reservation->customer['id'] }}</h1>
            <figcaption class="figure-caption">
                    <ul style="list-style: none; font-size: 2rem; text-align:left;">
                            <li><span style="font-weight:bold;">Username:</span> {{ $reservation->customer['username'] }}</li>
                            <li><span style="font-weight:bold;">Name:</span> {{ $reservation->customer['name'] }}</li>
                            <li><span style="font-weight:bold;">Last Name:</span> {{ $reservation->customer['lastname'] }}</li>
                            <li><span style="font-weight:bold;">Email:</span> {{ $reservation->customer['email'] }}</li>
                    </ul>
            </figcaption>
        </figure>


        <figure class="figure" style="background: #f0f0f0; padding: 20px; text-align: center; width:400px; margin:20px auto;  border-radius:15px; box-shadow: 1px 1px 5px 2px #333;">
                <h1 class="title" style="margin-top:0;">Vehicle ID: {{ $reservation->vehicle['id'] }}</h1>
               
                <figcaption class="figure-caption">
                        <ul style="list-style: none; font-size: 2rem; text-align:left;">
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Make:</span> {{ $reservation->vehicle->modelOfVehicle->makeOfVehicle['name'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Model:</span> {{ $reservation->vehicle->modelOfVehicle['name'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Type:</span> {{ $reservation->vehicle['type'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Power:</span> {{ $reservation->vehicle['engine_power'] }} kW</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Doors:</span> {{ $reservation->vehicle['door_number'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Gearbox:</span> {{ $reservation->vehicle['gearbox'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">AC:</span> {{ $reservation->vehicle['auto_ac'] }}</li>
                        <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Price:</span> {{ $reservation->vehicle['price'] }} HRK</li>
                        <li><span style="font-weight:bold;">Status:</span> {{ $reservation->vehicle['status'] }}</li>
                        </ul>
                </figcaption>
            </figure>
        <br>
      </div>
    </div>
  </div>

@endsection