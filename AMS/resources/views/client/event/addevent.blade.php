 <!DOCTYPE html>
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
  <div class="containe">
   <div class="row">
   <div class="col-md-8 col-md-offset-2">
   <div class="panel panel-default">
    <div class="panel-heading" style="background: #2e6da4, color: white;">

        <strong>Add Booking To Calender</strong>
     </div>
     <div class="panel-body">

     <h1><strong> Add Booking Information </strong></h1>
     <form method="POST" action="{{route('events.store') }}">
        @csrf

      <label for="">Enter Name of Staff</label>
      <input type="text" class="form-control" name="title" placeholder="Enter The Name" /> <br /> <br/>
      <label for="">Enter color</label>
      <input type="color" class="form-control" name="color" placeholder="Enter The Color" /> <br /> <br/> 
      <label for="">Enter Strat Date</label>
      <input type="date" class="form-control" name="date" placeholder="Enter The  Date" /> <br /> <br/> 
      <label for="">Enter The Time</label> <br /> <br/> 
      {{ Form::time('time', \Carbon\Carbon::now())}}  <br /> <br/> 
      <button type="submit" class="btn btn-primary">Add Booking Data</button>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
</body>
</html>