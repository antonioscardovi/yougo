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
                        {{-- <button class="btn btn-primary" data-customerid={{$customer->id}} data-toggle="modal" data-target="#about"><span class="glyphicon glyphicon-eye-open"></span> About</button> --}}

                      <a href="customers/{{ $customer->id }}">
                        <button class="btn btn-primary"><span class="glyphicon glyphicon-eye-open"></span> About</button>
                      </a>

                    {{-- <button class="btn btn-danger" data-customerid={{$customer->id}} data-toggle="modal" data-target="#delete"><span class="glyphicon glyphicon-trash"></span> Delete</button> --}}
                    <form method="POST" action="/customers/{{ $customer->id }}" style="display:inline;">
                      @method('DELETE')
                      @csrf
                         <button type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                  </form>  
                  </td>
                </tr>
                {{-- <a href="{{ url('customers/'. $customer->id) }}"></a> --}} <!-- LINK ZA JEDNOG CUSTOMERA -->
                @endforeach
            </tbody>
          </table>

          {{-- Delete Modal --}}
          <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center" id="myModalLabel">Delete Confirmation</h4>
                </div>
                <form method="POST" action="/customers/{{ $customer->id }}">
                        @method('DELETE')
                        {{csrf_field()}}
                    <div class="modal-body">
                          <p class="text-center">
                              Are you sure you want to delete this?
                          </p>
                            <input type="hidden" name="customer_id" id="customer_id" value="">
          
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                      <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
              </div>
            </div>
          </div>

          {{-- About Modal --}}
          <div class="modal fade" id="about" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center" id="myModalLabel">Details</h4>
                </div>
                <figure class="figure" style="background: #f0f0f0; padding: 20px; text-align: center; width:400px; margin:20px auto; border-radius:15px; box-shadow: 1px 1px 5px 2px #333;">
                    <h1 class="title" style="margin-top:0;">Customer ID: {{ $customer->id }}</h1>
                    <figcaption class="figure-caption">
                            <ul style="list-style: none; font-size: 2rem; text-align:left;">
                                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Username:</span> {{ $customer->username }}</li>
                                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Name:</span> {{ $customer->name }}</li>
                                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Last Name:</span> {{ $customer->lastname }}</li>
                                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Email:</span> {{ $customer->email }}</li>
                                    <li style=" border-bottom:1px solid #999;"><span style="font-weight:bold;">Is Verified:</span> @if ( $customer->verified ) verified @else not verified @endif</li>
                                    <li><span style="font-weight:bold;">Reservations:</span> {{ $customer->reservations->count() }}</li>
                            </ul>
                    </figcaption>
                </figure>
    
                <br>
              </div>
            </div>
          </div>

@endsection

