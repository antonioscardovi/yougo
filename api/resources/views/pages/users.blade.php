@extends('adminlte::page')

@section('content')
    <h1 class="title" style="margin-top:0;">Users</h1>
    <hr>


    <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Admin</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin }}</td>
                </tr>
                {{-- <a href="{{ url('users/'. $user->id) }}"></a> --}} <!-- LINK ZA JEDNOG userA -->
                @endforeach
            </tbody>
          </table>


@endsection

