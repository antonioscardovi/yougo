@extends('adminlte::page')

@section('content')
<div class="container">
        <h1 class="title" style="margin-top:0; text-align:center; padding:10px;  color:#333;">Reservation ID: {{ $reservation->id }} </h1>
       
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
                    <h1 class="title" style="margin-top:0;">reservation ID: {{ $reservation->vehicle['id'] }}</h1>
                    {{-- <img src="{{ asset($reservation->vehicle['image']) }}" class="figure-img img-fluid rounded" style="border: 2px solid #333; border-radius:10px; width:285px;"> --}}
                    @foreach ($reservation->vehicle->images as $image)
        <?php $i = $i+1 ?> 
        <img class="figure-img img-fluid rounded" src="{{ asset($image->filename) }}" alt="" style="border: 2px solid #333; border-radius:10px; width:285px;">
        @if ($i > 1) @break @endif
    @endforeach
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
                
                
<form method="POST" action="/reservations/{{ $reservation->id }}" style="margin-top: 2rem; text-align:center;">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger" style="width: 200px;">Delete</button>
            </div>
        </div>
</form>
</div>

@endsection