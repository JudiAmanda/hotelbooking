@extends('adminlte::page')

@section('title', 'Add Room')

@section('content_header')
    <h1 class="text-secondary">Add Room</h1>
@stop

@section('content')

  <div class="row" style="width: 500px; margin:auto;">
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
        <form method="POST" action="{{ route('submit_room') }}">
            @csrf
        <div class="form-group">
    <label for="RoomType">Room Type</label>
    <input type="text" class="form-control" name="room_type"  placeholder="Enter Room Type" required>
  </div>
  <div class="form-group">
    <label for="price">Room Price</label>
    <input type="number" class="form-control" name="price"  value="" required>
  </div>
  
  <div class="form-group">
    <label for="availability">availability</label>
    <input type="checkbox" class="form-control" name="availability" checked=checked value="1">
  </div>
 
<div class="form-group">
  <select class="select-control" name="hotel">
  @foreach ($hotels as $hotel) 
  <option value="{{ $hotel->id }}"> {{ $hotel->name }}  </option>
  @endforeach
</select>
</div>

  <button type="submit" class="btn btn-primary">Add Room</button>
</form>

</div>  

</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop
