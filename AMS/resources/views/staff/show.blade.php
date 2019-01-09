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
      <h1> Staff </h1>
      <th>  Name </th>
      <th> User Name </th>
      <th> Mail </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($staff as $staff)
      <tbody>
      <tr>
     
      <td>{{ $staff->name}}</td>
      <td>{{ $staff->username}}</td>
      <td>{{ $staff->email}}</td>
      <th>
      <form method="POST" action="{{'staffdelete',$staff->id}}">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}

        <div class="form-group">
            <input type="submit" class="btn btn-danger delete-user" value="Delete Staff">
        </div>
    </form>
      </th>
      <tr>
      </tbody>
      @endforeach
      </table>
      </div>
      </div>
            
@endsection