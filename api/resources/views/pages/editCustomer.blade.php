@extends('layouts.layout')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="section">

  
    <h1 class="title">Edit Customer</h1>
    <h2 class="subtitle">ID: {{ $customer->id }}</h2>


    <form method="POST" action="/customers/{{ $customer->id }}" style="margin-bottom: 1rem">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="field">
            <label for="name" class="label">Name</label>

            <div class="control">
                <input type="text" class="input" name="name" placeholder="{{ $customer->name }}">
            </div>
        </div>

        <div class="field">
            <label for="lastname" class="label">Last Name</label>

            <div class="control">
                <input type="text" class="input" name="lastname" placeholder="{{ $customer->lastname }}">
            </div>
        </div>

        <div class="field">
            <label for="email" class="label">Email</label>

            <div class="control">
                <input type="text" class="input" name="email" placeholder="{{ $customer->email }}">
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-link">Update</button>
            </div>
        </div>

    </form>
    

</div>
</div>
@endsection