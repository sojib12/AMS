@extends('layouts.backend.app')

@push('css')

@endpush

@section('content')
<div class="containe">
   <div class="row">
   <div class="col-md-6 col-md-offset-3" >
   <div class="panel panel-default">
    <div class="panel-heading" style="background-color: DarkSalmon; ">
   
    <h1>Staff Appointment Hour</h2>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST','enctype'=> 'multipart/form-data']) !!}

      
      <div class="form-group">
      <label for="">Your Name</label><br /> 
      <!input type="" class="form-control" name="name" placeholder="name" /> 
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

          	print '<select name="name">';
	          print '<option value="Select" readonly>Select</option>';

	         while($row=mysqli_fetch_array($result))
	          {

         	 print '<option value="'.$row['name'].'">'.$row['name'].'</option>';
        	}
           print '</select>';
      ?>
      <br/><br/>
      <label for="">Select Day</label><br />
      <select name="day" placeholder="Day">
         <option value="Saturday">Saturday</option>
         <option value="Sunday">Sunday</option>
         <option value="Monday">Monday</option>
         <option value="Tuesday">Tuesday</option>
         <option value="Wednesday">Wednesday</option>
         <option value="Thursday">Thursday</option>
         <option value="Friday">Friday</option>
      </select> <br /> <br/>
      
      <label for=""> Start Time</label><br />  
      {{ Form::time('start_time', \Carbon\Carbon::now())}}  <br /> <br />
      <label for="">End Time</label> <br /> 
      {{ Form::time('end_time', \Carbon\Carbon::now())}}  <br /> <br/>
      <button type="submit" class="btn btn-primary">Save Scheduel</button>
       
        {!! Form::close() !!}
        </div>
        </div>
      </div>
      </div>
      </div>
      </div>
@endsection

@push('js')

@endpush
