@extends('layouts.backend.app')
@push('css')

@endpush

@section('content')
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <div class="jumbotron">
    <form action="{{route('events.update',$id)}}" method="Post">
    @csrf 
    <div class="container">
    <div class="jumbotron" style="margin-top; 5%;">
    <h1> Update your Data</h1>
    <hr>
      <input type="hidden" name="_method" value="UPDATE" />
      <div class="form-group">
      <label> Name of Staff</label>
      <input type="text" class="form-control" placeholder="Enter Name" value="{{$events->title}}">
      </div>

      <div class="form-group">
      <label> Color </label>
      <input type="color" class="form-control" placeholder="Enter color" value="{{$events->color}}">
      </div>

      <div class="form-group">
      <label> Booking Date</label>
      <input type="date" class="form-control" placeholder="Enter Date" value="{{$events->date}}">
      </div>

      <div class="form-group">
      <label> Booking Time</label>
      {{ Form::time('time', \Carbon\Carbon::now())}}
      </div>

      <div class="form-group">
        {{method_field('PUT')}}
        <button type="submit" name="submit" class="btn btn-success">Update Data</button>
      </div>
      </div>
      </form>
      </div>
      </div>


</body>
</html>

@endsection

@push('js')

@endpush
