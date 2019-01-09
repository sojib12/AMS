@extends('layouts.backend.app')

@section('content')
<br>
<br>
<br>
    
    
    <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered table-hover">
     <thead class ="thead">
      <tr class="warning">
      <h1> Staff Appointment Hours</h1>
      <th> Staff Name </th>
      <th> Day </th>
      <th> Start Time </th>
      <th> End Time </th>
      
      </tr>
      </thead>
      @foreach($posts as $posts)
      <tbody>
      <tr>
      <td>{{ $posts->name}}</td>
      <td>{{ $posts->day}}</td>
      <td>{{ $posts->start_time}}</td>
      <td>{{ $posts->end_time}}</td>

        <tr>
      </tbody>
      @endforeach
      </table>
      </div>
      </div>
@endsection