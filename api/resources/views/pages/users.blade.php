@extends('adminlte::page')

@section('content')
    <h1 class="title" style="margin-top:0;">All Users</h1>


    <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem;">
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
                    <td><button class="edit-modal btn btn-info"
                        data-info="{{$user->id}},{{$user->name}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button>
                    <button class="delete-modal btn btn-danger"
                        data-info="{{$user->id}},{{$user->name}}">
                        <span class="glyphicon glyphicon-trash"></span> Delete
                    </button></td>
                </tr>
                {{-- <a href="{{ url('users/'. $user->id) }}"></a> --}} <!-- LINK ZA JEDNOG userA -->
                @endforeach
            </tbody>
          </table>


@endsection

