@extends('layout')

@section('title', 'Add Vehicle')

@section('content')
    <h1>Add new vehicle</h1>

    <form method="POST" action="/dashboard">

        {{ csrf_field() }}

        <div>
            <input type="text" name="make" placeholder="E.x. Yugo">
        </div>
        <div>
            <input type="text" name="model" placeholder="E.x. Yugo">
        </div>
        <div>
            <button type="submit">Add</button>
        </div>
    </form>
@endsection