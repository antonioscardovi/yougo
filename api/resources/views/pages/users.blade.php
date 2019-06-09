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
                    <td style="text-align:right;">
                        <button class="btn btn-primary" data-userid={{$user->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button>
                    </td>
                </tr>
                {{-- <a href="{{ url('users/'. $user->id) }}"></a> --}} <!-- LINK ZA JEDNOG userA -->
                @endforeach
            </tbody>
          </table>

          <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center" id="myModalLabel">Details</h4>
                </div>
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
    
                <br>
              </div>
            </div>
          </div>


@endsection

