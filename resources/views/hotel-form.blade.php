@extends('adminlte::page')

@section('title', 'Add Hotel')

@section('content_header')
    <h1 class="text-secondary">Add Hotel</h1>
@stop

@section('content')

  <div class="row" style="width: 500px; margin:auto;">
  @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 @if (\Session::has('success'))
    <div  align="center" class="alert alert-success" role="alert">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('error'))
    <div align="center" class="alert alert-danger" role="alert">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>

@endif
</div>
   
 <div class="row">
 
    <div class="col-lg-6 ">
        <form method="POST" action="{{ route('submit_hotel') }}" enctype="multipart/form-data">
            @csrf
        <div class="form-group">
    <label for="hotelName">Hotel Name</label>
    <input type="text" class="form-control" name="hotel_name"  placeholder="Enter Hotel Name">
  </div>
  <div class="form-group">
    <label for="location">Location</label>
    <input type="text" class="form-control" name="location"  placeholder="Enter Hotel Location">
  </div>
  <div class="form-group">
    <label for="location">Description</label>
    <textarea class="form-control" name="description"> </textarea>
  </div>
  <div class="form-group">
    <label for="location">Amenities</label>
    <input type="text" class="form-control" name="amenities"  placeholder="Enter Hotel Amenities">
  </div>
 
 

<div class="form-group">
  <select class="select-control" name="state">
  @foreach ($states as $state) 
  <option value="{{ $state->id }}"> {{ $state->state_name }}  </option>
  @endforeach
</select>
</div>

<div class="form-group">
  <input type="file" class="form-control" name="image" >
</div>

  <button type="submit" class="btn btn-primary">Add Hotel</button>
</form>

</div>  

</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop
