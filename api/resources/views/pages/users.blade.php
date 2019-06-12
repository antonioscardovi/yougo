@extends('adminlte::page')

@section('content')
    <h1 class="title" style="margin-top:0;">Users</h1>
    <hr>


    <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td style="text-align:right;">
                        <a href="users/{{ $user->id }}">
                        <button class="btn btn-primary" data-userid={{$user->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button>
                      </a>
                      </td>
                </tr>
                {{-- <a href="{{ url('users/'. $user->id) }}"></a> --}} <!-- LINK ZA JEDNOG userA -->
                @endforeach
            </tbody>
          </table>

       


@endsection

