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
use App\EventType;
use App\Venue;
use App\Transaction;

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
        $eventTypes = EventType::all();

        $venues = Venue::all();
        $organizations = Organization::all();
        return view('event.event-create', ['eventTypes'=>$eventTypes, 'venues'=> $venues, 'organizations' => $organizations ]);
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
           // 'end_date_time' => 'required',
           'type' => 'required',
           'place' => 'required',
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $orgID = Auth::user()->orgHead->org_id;

        $event = new Event();
        $event->event_name = $request->input('title');
        $event->event_description = $request->input('description');
        $event->event_date_start = date("Y-m-d H:i:s",strtotime($request->input('start_date_time')));
        // $event->event_date_end = date("Y-m-d");
        $event->event_time_start = date("Y-m-d H:i:s",strtotime($request->input('start_date_time')));
        $event->event_typeID = $request->input('type');
        $event->event_venueID = $request->input('place');
        // $event->event_time_end = date("H:i:s");
        $event->event_orgID = $orgID;
        $event->event_fee = $request->input('fee');
        $event->save();

        $eventStatus = new EventStatus();
        $eventStatus->admin_id = 1;
        $eventStatus->event_status_status = "p";
        $event->eventStatus()->save($eventStatus);
        
        return redirect()->route('event.create')->with('success_message', 'Event was Successfully Created, Please wait for the approval');
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
        $events = EventStatus::where('admin_ID',5)->where('event_status_status',"a")->get();
        // echo $events;
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
        $userID = Auth::user()->user_id;
        $event = Event::where('event_id',$eventID)->first();
        $attendee = Transaction::where('trans_userID', $userID)->where('trans_eventID', $eventID)->first();
        $attendeeStatus = Attendee::where('userID', $userID)->where('event_ID', $eventID)->first();


        return view('event.single-event', ['event' => $event, 'attendee' => $attendee, 'attendeeStatus' => $attendeeStatus ]);

    }

    public function join($id){
        
        
        Auth::user()->joinEvent($id);
        
        return back();


    }

    public function catSearch($org_id)

    {


        if($org_id){



            $events = EventStatus::whereHas('eventStatusEvent', function($query) use ($org_id){

                $query->where('event_orgID', $org_id);

            })->where('admin_ID',5)->where('event_status_status',"a")->get();
            // $evento = $organization->org_id;
            // $event = Event::where('event_orgID', $evento);
            
            // $events = DB::table('event_statuses')
            //         ->rightJoin('events', 'events')
            // echo $event;
            // exit();
            $organizations = Organization::all();
            $colleges = College::all();  
            $eventCount = count($events);

        }else{
            
            $colleges = College::all();
        // $organization = Organization::inRandomOrder()->take(20)->get();
            $events = Event::all();
        }
        
        return view('event.events')->with([
                    'events' => $events,
                    'colleges' => $colleges,
                    'eventCount' => $eventCount,
                    'organizations' => $organizations
            ]);
               
    

        // return view('event.events')->with('category' , $category);
    }

    public function requests()
    {

        $uid = Auth::User()->user_id;

        $FriendRequests = DB::table('attendees')
                ->rightJoin('events', 'events.id', '=', 'friends.requester')
                ->where('status', '=', Null)
                ->where('friends.user_requested', '=', $uid)->get(); //get the id of the friend requested

                // echo $FriendRequests;
        return view('profile.requests', compact('FriendRequests')); //return with the FriendRequests array
    }
}
