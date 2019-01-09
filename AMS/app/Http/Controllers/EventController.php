<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use App\Notifications\NewAppointmentAdd;
//use App\NewAppointmentAdd;
use App\Event;
use App\User;
use DB;
class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $events = Event::all();
        $event = [];
        
        foreach($events as $row){
            $enddate = $row->date." 24:00:00";
            $event[] = calendar::event(
                $row->staff_name,
                $row->appointment_takenby,
                true,
                new \DateTime($row->date),
                
                
                $row->id,
                $row->time
               
               
                );
        }

       $calendar = calendar::addEvents($event);
        return view('event', compact('events','calendar'));
       //return view('event');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {    

      // Event::create($request->only('user_id','staff_name','appointment_takenby','date','time'));
        $events = new Event;
        $events->staff_name = $request->input('staff_name');
        $events->appointment_takenby = $request->input('appointment_takenby');
        $events->date = $request->input('date');
        $events->time = $request->input('time');
        $events->user_id = auth()->user()->id;
        $events->save();

        $users = User::where('role_id','2')->get();
        Notification::send($users, new NewAppointmentAdd($events));

      
        return redirect(('displaydata'))->with('success', 'Appointments Added');
    }
     
    public function display()
    {
         return view('addevent');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $events = Event::all();
        return view('display')->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $events = Event::find($id);
        return view('editform', compact('events','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $this->validate($request,[
            'staff_name'=>'required',
            'appointment_takenby'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]); 
        
        $events = Event::find($id);
        $events->staff_name = $request->input('staff_name');
        $events->appointment_takenby = $request->input('appointment_takenby');
        $events->date = $request->input('date');
        $events->time = $request->input('time');
       
       /*
        if ($events != null) {
            $events->save();
            //return redirect()->route('events/show')->with(['message'=> 'Successfully deleted!!']);
        }
      */
        $events->save();
            
        //Event::create($request->only('title','color','date','time'));

        return redirect(('events/show'))->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $events = Event::find($id);
        

        if ($events != null) {
            $events->delete();
            //return redirect()->route('events/show')->with(['message'=> 'Successfully deleted!!']);
        }
        //$events->delete();
        return redirect(('events/show'))->with('success', 'Appointment Removed');
    }
}
