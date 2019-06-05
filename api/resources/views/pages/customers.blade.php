@extends('adminlte::page')

@section('content')
    <h1 class="title" style="margin-top: 0;">Customers</h1>
<hr>

    <table id="table1" class="display cell-border table table-striped table-bordered" style="font-size: 2rem; background-color: #fff;  border: 2px solid #ccc;">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th style="text-align:right;">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($customers as $customer)
                <tr>
                    <td>{{ $customer->username }}</td>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->lastname }}</td>
                    <td>{{ $customer->email }}</td>
                    <td style="text-align:right;">
                        <a href="{{ url('customers/' .$customer->id) }}">
                    <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
                         </a>
                        {{-- <button class="edit-modal btn btn-info"
                        data-info="{{$customer->id}},{{$customer->name}}">
                        <span class="glyphicon glyphicon-edit"></span> Edit
                    </button> --}}
                    <button class="delete-modal btn btn-danger"
                        data-info="{{$customer->id}},{{$customer->name}}">
                        <span class="glyphicon glyphicon-trash"></span> Delete
                    </button></td>
                </tr>
                {{-- <a href="{{ url('customers/'. $customer->id) }}"></a> --}} <!-- LINK ZA JEDNOG CUSTOMERA -->
                @endforeach
            </tbody>
          </table>

        

@endsection

