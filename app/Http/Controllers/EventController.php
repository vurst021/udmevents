<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Event as Event;
use App\EventStatus;
use App\Attendee;
use App\College;
use App\Organization;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // echo Auth::user()->lname;
        $events = EventStatus::all()->where('admin_ID',5)->where('event_status_status',"a");
        // exit();
        return view('index', ['events' => $events ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.event-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator = Validator::make($request->all(), [
           'title' => 'required',
           'description' => 'required',
           'start_date_time' => 'required',
           'end_date_time' => 'required',
           'fee' => 'required',
           'type' => 'required',
           'place' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $event = new Event();
        $event->event_name = $request->input('title');
        $event->event_description = $request->input('description');
        $event->event_date_start = date("Y-m-d");
        $event->event_date_end = date("Y-m-d");
        $event->event_time_start = date("H:i:s");
        $event->event_time_end = date("H:i:s");
        $event->event_fee = $request->input('fee');
        $event->save();

        $eventStatus = new EventStatus();
        $eventStatus->admin_id = 1;
        $eventStatus->event_status_status = "p";
        $event->eventStatus()->save($eventStatus);
        
        return view('event.event-create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {   

        $organizations = Organization::all();
        $colleges = College::all();
        // echo Auth::user()->lname;
        $events = EventStatus::all()->where('admin_ID',5)->where('event_status_status',"a");
        // exit();
        return view('event.events', ['events' => $events, 'colleges' => $colleges, 'organizations'=>$organizations ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Show the event requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewEvent($eventID)
    {
        $event = Event::where('event_id',$eventID)->first();


        return view('event.single-event', ['event' => $event ]);

    }

    public function join($id){
        
        
        Auth::user()->joinEvent($id);
        
        return back();


    }

    public function catSearch($col_id)

    {

        if($col_id){


            $organization = Organization::where('org_colID', $col_id)->first();
            $evento = $organization->org_id;
            $event = Event::where('event_orgID', $evento);
            
            // $events = DB::table('event_statuses')
            //         ->rightJoin('events', 'events')
            echo $events;
            exit();
            $colleges = College::all();  

        }else{
            
            $colleges = College::all();
            $organization = Organization::inRandomOrder()->take(20)->get();
            $events = Event::all();
        }
        
        return view('event.events')->with([
                    'events' => $events,
                    'colleges' => $colleges,
            ]);
               
    

        // return view('event.events')->with('category' , $category);
    }

    public function requests()
    {

        $uid = Auth::User()->user_id;

        $FriendRequests = DB::table('attendees')
                ->rightJoin('events', 'events.id', '=', 'friends.requester')
                ->where('status', '=', Null)
                ->where('friends.user_requested', '=', $uid)->get(); //get the id of the event requested

                // echo $FriendRequests;
        return view('profile.requests', compact('FriendRequests')); //return with the EventRequests array
    }

    
}
