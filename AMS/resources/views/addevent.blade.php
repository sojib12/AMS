@extends('layouts.backend.app')
@push('css')

@endpush

@section('content')
<div class="image">
 
  <div class="container">
 
  <!div class="jumbotron">
   <div class="row">
   <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-heading" style="background-color: SlateGray;" >
    
     <h1><strong> Appointments Booking Form </strong></h1>
     <form method="POST" action="{{route('events.store') }}">
        @csrf
      <div class="form-group">
      <label for="">Select Staff Name</label><br /> 
      <!input type="" class="form-control" name="staff_name" placeholder="Enter The Name" /> 
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
      <br /> 
      <div class="form-group">
      <label for="">Appointments Booked By</label>
      <input type="text" class="form-control" name="appointment_takenby" placeholder="Enter The Name" /> 
      </div><br /> 
       <div class="form-group">
      <label for="">Enter  Date</label>
      <input type="date" class="form-control" name="date" placeholder="Enter The  Date" />
      </div> <br /> 
      <div class="form-group">
      <label for="">Enter Time</label> <br /> 
      {{ Form::time('time', \Carbon\Carbon::now())}}  </div> <br /> 
      <div class="form-group">
      <button type="submit" class="btn btn-primary">Add Appointment</button>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      
     


@endsection

@push('js')

@endpush
