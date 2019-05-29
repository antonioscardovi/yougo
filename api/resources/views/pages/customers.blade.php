@extends('adminlte::page')

@section('content')
<div class="container">
<div class="section">
    <h1 class="title">Customers</h1>

    @foreach($customers as $customer)

    <a href="{{ url('customers/'. $customer->id) }}"><li>{{ $customer->name }}</li></a>

    @endforeach
</div>
</div>
@endsection

