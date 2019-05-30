@extends('adminlte::page')

@section('content')
<div class="container">
<div class="section">
    <h1 class="title">{{ $user->username }}</h1>
    <ul>
        <li><span style="font-weight:bold;">Name: </span>{{ $user->name }}</li>
        <li><span style="font-weight:bold;">Email:</span> {{ $user->email }}</li>
        <li><span style="font-weight:bold;">Admin:</span> {{ $user->admin }}</li>
    </ul>
</div>
</div>
@endsection