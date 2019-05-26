@extends('layouts.layout')

@section('content')
<div class="section">
<h1 class="title">Customer ID: {{ $customer->id }}</h1>
<div class="table">
<li><span class="has-text-weight-bold">Name:</span> {{ $customer->name }}</li>
<li><span class="has-text-weight-bold">Last Name:</span> {{ $customer->lastname }}</li>
<li><span class="has-text-weight-bold">Email:</span> {{ $customer->email }}</li>
<li><span class="has-text-weight-bold">Verified:</span> {{ $customer->verified }}</li>
</div>
<a href="{{ $customer->id }}/edit"><button class="button is-link" style="margin-top: 1rem;">Edit</button></a>
<form method="POST" action="/customers/{{ $customer->customer_id }}" style="margin-top: 1rem">
    @method('DELETE')
    @csrf
    
    <div class="field">
            <div class="control">
                <button type="submit" class="button is-danger">Delete</button>
            </div>
        </div>
</form>
</div>
@endsection