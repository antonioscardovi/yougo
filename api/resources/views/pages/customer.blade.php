@extends('adminlte::page')

@section('content')
<div class="container">
<div class="section">
<h1 class="title">Customer ID: {{ $customer->id }}</h1>
<ul>
<li><span style="font-weight:bold;">Name:</span> {{ $customer->name }}</li>
<li><span style="font-weight:bold;">Last Name:</span> {{ $customer->lastname }}</li>
<li><span style="font-weight:bold;">Email:</span> {{ $customer->email }}</li>
<li><span style="font-weight:bold;">Is Verified:</span> @if ( $customer->verified ) verified @else not verified @endif</li>
</ul>
<a href="{{ $customer->id }}/edit"><button class="btn btn-primary" style="margin-top: 1rem;">Edit</button></a>
<form method="POST" action="/customers/{{ $customer->customer_id }}" style="margin-top: 0.5rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-danger">Delete</button>
            </div>
        </div>
</form>
</div>
</div>
@endsection