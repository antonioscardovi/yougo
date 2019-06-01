@extends('adminlte::page')

@section('content')
<div class="card">
<div class="card-body">
<h1 class="card-title">Customer ID: {{ $customer->id }}</h1>
<ul>
<li><span style="font-weight:bold;">Name:</span> {{ $customer->name }}</li>
<li><span style="font-weight:bold;">Last Name:</span> {{ $customer->lastname }}</li>
<li><span style="font-weight:bold;">Email:</span> {{ $customer->email }}</li>
<li><span style="font-weight:bold;">Is Verified:</span> @if ( $customer->verified ) verified @else not verified @endif</li>
</ul>
<a href="{{ $customer->id }}/edit"><button class="btn btn-primary" style="margin-top: 1rem;width: 100px;">Edit</button></a>
<form method="POST" action="/customers/{{ $customer->customer_id }}" style="margin-top: 0.5rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
            </div>
        </div>
</form>
</div>
</div>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>
                            {{ $customer->name }}</h4>
                        <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                </i></cite></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i> {{ $customer->email }}
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection