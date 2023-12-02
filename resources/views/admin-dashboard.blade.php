@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Admin Dashboard</h1>
@stop

@section('content')
    <p>Welcome to Michbooking Admin Area</p>
    
 <div class="row">
        <div class="col-lg-3 col-4">
           
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>2</h3></h3>

                    <p>Users</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
          <div class="col-lg-3 col-4">

            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>10</h3></h3>

                    <p>Hotels</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-4">

            <div class="small-box bg-danger">
                <div class="inner">
                    <h3>20</h3></h3>

                    <p>Rooms</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
      
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
