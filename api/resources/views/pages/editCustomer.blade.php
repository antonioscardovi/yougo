@extends('adminlte::page')

@section('title', 'Edit')

@section('content')
<div class="container">
    <div class="section">

  
    <h1 class="title">Edit Customer</h1>
    <h2 class="subtitle">ID: {{ $customer->id }}</h2>


    <form method="POST" action="/customers/{{ $customer->id }}" style="margin-bottom: 1rem">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name" class="">Name</label>

            <div class="control">
                <input type="text" class="form-control" name="name" placeholder="{{ $customer->name }}">
            </div>
        </div>

        <div class="form-group">
            <label for="lastname" class="">Last Name</label>

            <div class="control">
                <input type="text" class="form-control" name="lastname" placeholder="{{ $customer->lastname }}">
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="">Email</label>

            <div class="control">
                <input type="text" class="form-control" name="email" placeholder="{{ $customer->email }}">
            </div>
        </div>

        <div class="form-group">
            <div class="control">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>

    </form>
    

</div>
</div>
@endsection