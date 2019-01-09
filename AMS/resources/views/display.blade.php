@extends('layouts.backend.app')
@push('css')

@endpush

@section('content')

   <div class="container">
     <div class="jumbotron">
     <table class="table table-striped table-bordered table-hover">
     <thead class ="thead-dark">
      <tr class="warning">
      <h1> Booked Appointments </h1>
      <th> Staff Name </th>
      <th> Appoinment Booked By </th>
      <th> Date </th>
      <th> Time </th>
      <th> Update </th>
      <th> Delete </th>
      </tr>
      </thead>
      @foreach($events as $event)
      <tbody>
      <tr>
      
      <td>{{ $event->staff_name}}</td>
      <td>{{ $event->appointment_takenby}}</td>
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
      
    


@endsection

@push('js')

@endpush
