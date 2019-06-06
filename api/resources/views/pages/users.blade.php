@extends('adminlte::page')

@section('content')
    <h1 class="title" style="margin-top:0;">Users</h1>
    <hr>


    <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Admin</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->lastname }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->admin }}</td>
                    <td style="text-align:right;">
                            <a href="{{ url('users/' .$user->id) }}">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
                             </a>
                    </td>
                </tr>
                {{-- <a href="{{ url('users/'. $user->id) }}"></a> --}} <!-- LINK ZA JEDNOG userA -->
                @endforeach
            </tbody>
          </table>


@endsection

