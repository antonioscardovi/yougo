@extends('layouts.layout')

@section('content')
<div class="section">
<h1 class="title">{{ $customer->name }}</h1>
<div class="table">
<li>Name: {{ $customer->lastname }}</li>
<li>Email: {{ $customer->email }}</li>
<li>Verified: {{ $customer->verified }}</li>
</div>
</div>
@endsection