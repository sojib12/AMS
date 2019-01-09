<?php

namespace App\Http\Controllers\Client;

use App\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = Event::all();
        $event = [];
        
        foreach($events as $row){
            $enddate = $row->date." 24:00:00";
            $event[] = calendar::event(
                $row->title,
                true,
                new \DateTime($row->date),
                
                
                $row->id,
                $row->time,
                [
                   'color' => $row->color,
                ]
               
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
        Event::create($request->only('title','color','date','time'));

      
        return redirect(route('client.events.index'))->with('success', 'Appointments Added');
    }

    public function display()
    {
         return view('addevent');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    

    public function show(Event $event)
    {
        $events = Event::User()->events()->latest()->get();
        return view('display')->with('events',$events);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        $events = Event::find($id);
        return view('editform', compact('events','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        $this->validate($request,[
            'title'=>'required',
            'color'=>'required',
            'date'=>'required',
            'time'=>'required',
        ]);

        $events = Event::find($id);
        

        $events->title = $request->input('title');
        $events->color = $request->input('color');
        $events->date = $request->input('date');
        $events->time = $request->input('time');

        /*if ($events != null) {
            $events->save();
            return redirect()->route('events/show')->with(['message'=> 'Successfully deleted!!']);
        }
       */
       $events->save();
             
       // Event::create($request->only('title','color','date','time'));

        return redirect('events/show')->with('success','Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        $events = Event::find($id);
        if ($events != null) {
            $events->delete();
            //return redirect()->route('events/show')->with(['message'=> 'Successfully deleted!!']);
        }
        //$events->delete();
        return redirect('events/show')->with('success', 'Appointment Removed');
    }
}
