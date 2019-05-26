@extends('layout')

@section('title', 'Vehicles')

@section('content')
<div class="container">
    <div class="section">
    <h1 class="title">All Vehicles</h1>


    @foreach($vehicles as $vehicle)

<a href="{{ url('vehicles/' .$vehicle->vehicle_id) }}"><li>{{ $vehicle->make }} {{ $vehicle->model }}</li></a>

<div class="card">
        <div class="card-image">
          <figure class="image is-128x128">
            <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
          </figure>
        </div>
        <div class="card-content">
          <div class="media">
            <div class="media-left">
              <figure class="image is-48x48">
                <img src="https://bulma.io/images/placeholders/96x96.png" alt="Placeholder image">
              </figure>
            </div>
            <div class="media-content">
              <p class="title is-4">{{ $vehicle->make }}</p>
              <p class="subtitle is-6">{{ $vehicle->model }}</p>
            </div>
          </div>
      
          <div class="content">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Phasellus nec iaculis mauris. <a>@bulmaio</a>.
            <a href="#">#css</a> <a href="#">#responsive</a>
            <br>
            <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
          </div>
        </div>
      </div>

    @endforeach
</div>
</div>
@endsection