@extends('adminlte::page')

@section('content')
<h1 class="title" style="margin-top:0;">Reservations</h1>

 <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem;">
  <thead>
      <tr>
          <th>Customer</th>
          <th>Vehicle</th>
          <th>Actions</th>
      </tr>
  </thead>
  <tbody>
      @foreach($reservations as $reservation)
      <tr>
          <td>{{ $reservation->customer_id }}</td>
          <td>{{ $reservation->vehicle_id }}</td>
          <td>
              <a href="{{ url('reservations/' .$reservation->id) }}">
            <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
              </a>

            <a href="reservations/{{$reservation->id}}/edit">
            <button class="edit-modal btn btn-info" data-toggle="edit-modal" data-target="#myModal"
            data-info="{{$reservation->id}},{{$reservation->type}}">
            <span class="glyphicon glyphicon-edit"></span> Edit
        </button>
            </a>
        <button class="delete-modal btn btn-danger"
            data-info="{{$reservation->id}},{{$reservation->type}}">
            <span class="glyphicon glyphicon-trash"></span> Delete
        </button></td>
        </a>
      </tr>
      {{-- <a href="{{ url('reservations/' .$reservation->id) }}"></a> --}} <!-- LINK ZA JEDNO VOZILO -->
      @endforeach
  </tbody>
</table>

@endsection