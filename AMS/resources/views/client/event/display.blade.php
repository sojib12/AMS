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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
   <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered table-hover">
     <thead class ="thead">
      <tr class="warning">
      <th> Id </th>
      <th> Title </th>
      <th> Color </th>
      <th> Date </th>
      <th> Time </th>
      <th> Update </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($events as $event)
      <tbody>
      <tr>
      <td>{{ $event->id}}</td>
      <td>{{ $event->title}}</td>
      <td>{{ $event->color}}</td>
      <td>{{ $event->date}}</td>
      <td>{{ $event->time}}</td>
      <th><a href="{{action('EventController@edit',$event['id'])}}" class="btn btn-success">
              Edit</a>
      </th>
      <th>
      {!!Form::open(['action' => ['EventController@destroy', $event->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method', 'DELETE')}}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      </th>
      <tr>
      </tbody>
      @endforeach
      </table>
      </div>
      </div>
    
</body>
</html>

@endsection

@push('js')

@endpush
