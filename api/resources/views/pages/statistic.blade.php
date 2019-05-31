@extends('adminlte::page')

@section('content')
{{-- <div class="content-header" style="font-size:2rem;"> --}}
       <h1 class="title" style="margin-top:0;">Dashboard</h1>
       <hr>
{{-- </div> --}}

<div class="row" style="margin: 10px; font-size: 2rem;">
        
              
          <!-- small box -->
          <div class="small-box bg-green">
                <div class="inner">
                  <h3>{{ $vehicles->count() }}</h3>
    
                  <h1>Vehicles</h1>
                </div>
                <div class="icon">
                  <i class="ion ion-android-car"></i>
                </div>
                <a href="vehicles" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
        
              
          <!-- small box -->
          <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>{{ $customers->count() }}</h3>
    
                  <h1>Customers</h1>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="customers" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>

                
               <!-- small box -->
          <div class="small-box bg-aqua">
                <div class="inner">
                  <h3>{{ $reservations->count() }}</h3>
    
                  <h1>Reservations</h1>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
                <a href="reservations" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            
</div>
@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@endsection