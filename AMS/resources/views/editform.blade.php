@extends('layouts.backend.app')
@push('css')

@endpush

@section('content')

<div class="container">
    <div class="jumbotron">
    <form action="{{route('events.update',$id)}}" method="Post">
    @csrf 
    <div class="container">
    <div class="row">
   <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-heading" style="background-color: SlateGray;">
   
    <h1> Update your Data</h1>
    <hr>
      <input type="hidden" name="_method" value="UPDATE" />
      <div class="form-group">
      <label> Name of Staff</label> <br/>
      <!input type="text" class="form-control" placeholder="Enter Name" value="{{$events->staff_name}}">
      <?php
          $host = "localhost";
          $user = "root";
          $password = "";
          $db = "project";

          $con = mysqli_connect($host,$user,$password,$db);

          if(!$con)
          {
              echo mysqli_connect_error($con);
              
              
          }

           $sql = "SELECT name from users WHERE role_id=2";

	         $result = mysqli_query($con,$sql);

          	print '<select name="staff_name">';
              print '<option value="Select" readonly>Select</option>';
	         while($row=mysqli_fetch_array($result))
	          {

         	 print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        	}
           print '</select>';
      ?>
      </div>

      <div class="form-group">
      <label> Appointment Taken By </label>
      <input type="text" class="form-control" placeholder="Enter Name" value="{{$events->appointment_takenby}}">
      </div>

      <div class="form-group">
      <label> Booking Date</label>
      <input type="date" class="form-control" placeholder="Enter Date" value="{{$events->date}}">
      </div>

      <div class="form-group">
      <label> Booking Time</label><br>
      {{ Form::time('time', \Carbon\Carbon::now())}}
      </div>

      <div class="form-group">
        {{method_field('PUT')}}
        <button type="submit" name="submit" class="btn btn-success">Update Data</button>
      </div>
      </div>
      </div>
      </div>
      </div>
      </form>
     

@endsection

@push('js')

@endpush
