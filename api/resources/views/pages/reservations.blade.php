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
            {{-- <button class="btn btn-primary" data-reservationid={{$reservation->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button> --}}
            <a href="reservations/{{ $reservation->id }}">
              <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
            </a>
            {{-- <button class="btn btn-danger" data-reservationid={{$reservation->id}} data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</button> --}}
            <form method="POST" action="/reservations/{{ $reservation->id }}" style="display:inline;">
              @method('DELETE')
              @csrf
                 <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
          </form>
        </td>
      </tr>
      {{-- <a href="{{ url('reservations/' .$reservation->id) }}"></a> --}} <!-- LINK ZA JEDNO VOZILO -->
      @endforeach
  </tbody>
</table>



@endsection