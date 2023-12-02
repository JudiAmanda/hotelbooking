@extends('adminlte::page')

@section('title', 'Add State')

@section('content_header')
    <h1 class="text-secondary">Add State</h1>
@stop

@section('content')
<div class="row">
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
        <form method="POST" action="{{ route('submit_state') }}">
            @csrf

        <div class="form-group">
    <label for="stateName">State Name</label>
    <input type="text" class="form-control" name="state_name"  placeholder="Enter State Name">
  </div>

  <button type="submit" class="btn btn-primary">Save</button>
</form>

</div>  

</div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
  
@stop
