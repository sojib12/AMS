@extends('layouts.backend.app')

@section('content')
<br>
<br>
<br>
    <a href="/posts" class="btn btn-default">Go Back</a>
    <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered table-hover">
     <thead class ="thead">
      <tr class="warning">
      <h1> Staff Appointment Hours</h1>
      <th> Staff Name </th>
      <th> Day </th>
      <th> Start Time </th>
      <th>  End Time </th>
      <th> Update </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($post as $post)
      <tbody>
      <tr>
     
      <td>{{ $post->name}}</td>
      <td>{{ $post->day}}</td>
      <td>{{ $post->start_time}}</td>
      <td>{{ $post->end_time}}</td>
      <th><a href="{{action('PostsController@edit',$post['id'])}}" class="btn btn-success">
              Edit</a>
      </th>
      <th>
      {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
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
            
@endsection