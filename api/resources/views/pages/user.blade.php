@extends('adminlte::page')

@section('content')
<div class="container">

        <figure class="figure" style="background: #f0f0f0; padding: 20px; text-align: center; width:400px; margin:20px auto; border-radius:15px; box-shadow: 1px 1px 5px 2px #333;">
                <h1 class="title" style="margin-top:0;">Admin ID: {{ $user->id }}</h1>
                <figcaption class="figure-caption">
                        <ul style="list-style: none; font-size: 2rem; text-align:left;">
                                <li><span style="font-weight:bold;">Username:</span> {{ $user->username }}</li>
                                <li><span style="font-weight:bold;">Name:</span> {{ $user->name }}</li>
                                <li><span style="font-weight:bold;">Last Name:</span> {{ $user->lastname }}</li>
                                <li><span style="font-weight:bold;">Email:</span> {{ $user->email }}</li>
                                <li><span style="font-weight:bold;">Is Verified:</span> @if ( $user->admin ) verified @else not verified @endif</li>
                        </ul>
                </figcaption>
            </figure>

</div>


@endsection