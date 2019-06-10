@extends('adminlte::page')

@section('content')
<div class="container">

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
            <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">AC:</span> {{ $vehicle->auto_ac }}</li>
            <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Price:</span> {{ $vehicle->price }} HRK</li>
            <li><span style="font-weight:bold;">Status:</span> {{ $vehicle->status }}</li>
            </ul>
    </figcaption>
    <a href="{{ $vehicle->id }}/edit"><button class="btn btn-primary" style="margin-top: 1rem; width: 100px;">Edit</button></a>
<form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-top: 1rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
            </div>
        </div>
</form>
</figure>



{{-- <div class="section" style="background: #e4e4e4; padding: 20px; text-align: left;">
<h1 class="title">Vehicle ID: {{ $vehicle->id }}</h1>
<img src="{{ asset($vehicle->image) }}" style="border: 2px solid #333; ">
<ul style="list-style: none; font-size: 2rem; padding:0;">
    <li><span class="font-weight-bold">Make:</span> {{ $vehicle->modelOfVehicle->makeOfVehicle['name'] }}</li>
    <li><span class="font-weight-bold">Model:</span> {{ $vehicle->modelOfVehicle['name'] }}</li>
    <li><span class="font-weight-bold">Type:</span> {{ $vehicle->type }}</li>
    <li><span class="font-weight-bold">Power:</span> {{ $vehicle->engine_power }}</li>
    <li><span class="font-weight-bold">Doors:</span> {{ $vehicle->door_number }}</li>
    <li><span class="font-weight-bold">Status:</span> {{ $vehicle->status }}</li>
</ul>
<a href="{{ $vehicle->id }}/edit"><button class="btn btn-primary" style="margin-top: 1rem; width: 100px;">Edit</button></a>
<form method="POST" action="/vehicles/{{ $vehicle->id }}" style="margin-top: 1rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
            </div>
        </div>
</form> --}}

</div>
</div>
@endsection

