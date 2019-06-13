@extends('adminlte::page')

@section('content')
<div class="container">

        <figure class="figure" style="background: #f0f0f0; padding: 20px; text-align: center; width:400px; margin:20px auto; border-radius:15px; box-shadow: 1px 1px 5px 2px #333;">
                <h1 class="title" style="margin-top:0;">Customer ID: {{ $customer->id }}</h1>
                <figcaption class="figure-caption">
                        <ul style="list-style: none; font-size: 2rem; text-align:left;">
                                <li><span style="font-weight:bold;">Username:</span> {{ $customer->username }}</li>
                                <li><span style="font-weight:bold;">Name:</span> {{ $customer->name }}</li>
                                <li><span style="font-weight:bold;">Last Name:</span> {{ $customer->lastname }}</li>
                                <li><span style="font-weight:bold;">Email:</span> {{ $customer->email }}</li>
                                <li><span style="font-weight:bold;">Is Verified:</span> @if ( $customer->verified ) verified @else not verified @endif</li>
                        </ul>
                </figcaption>
            <form method="POST" action="/customers/{{ $customer->id }}" style="margin-top: 1rem">
                @method('DELETE')
                @csrf
                
                <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger" style="width: 100px;">Delete</button>
                        </div>
                    </div>
            </form>
            </figure>

</div>


@endsection