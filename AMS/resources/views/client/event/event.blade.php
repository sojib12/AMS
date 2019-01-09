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
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body>
    <div class="container">
    <div class="jumbotron">
    <div class="row">

    <a href="/addeventurlt" class="btn btn-success"> Add Appoinments </a>
    <a href="/displaydata" class="btn btn-primary"> Edit Appoinments </a>
    <a href="/deleteevent" class="btn btn-danger"> Delete Appoinments </a>


    </div>
<br>
<br>
<br>
    <div class="row">

    @if(count($errors)> 0)
    <div class="alert alert-danger">
    <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    </div>
    @endif

    @if(\Session::has('success'))
      <div class="alert alert-success">
        <p>{{\Session::get('success')}}</p>
        </div>
     @endif   

    <div class="col-md-8 col-md-offset-2">
    <div class="panel panel-default">
    <div class="panel-heading" style="background: #2e6da4; color: white;">
     Appointment Booking Calendar
     </div>

     <div class="panel-body">
     {!! $calendar->calendar() !!}
     {!! $calendar->script() !!}
     </div>
     </div>
     </div>
     </div>
     </div>
     </div>
</body>
</html>

@endsection

@push('js')

@endpush

