@extends('layouts.layout')

@section('content')
<div class="section">
    <h1 class="title">All Users</h1>

    @foreach($users as $user)

    <a href="{{ url('users/'. $user->id) }}"><li>{{ $user->name }}</li></a>

    @endforeach
</div>
@endsection

