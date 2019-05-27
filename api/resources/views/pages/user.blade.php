@extends('adminlte::page')

@section('content')
<div class="section">
<h1 class="title">{{ $user->username }}</h1>
    <ul>
        <li>Name: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Admin: {{ $user->admin }}</li>
    </ul>
</div>
@endsection