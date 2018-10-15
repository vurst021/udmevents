<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\EventStatus;
use App\Event;
use App\Attendee;
use Validator;

class OrgHeadController extends Controller
{
    //
    public function manageEvents(){
    	$orgId = Auth::User()->orgHead->org_id;
    	$events = Event::where('event_orgID', $orgId)->get();
  //   	$events = EventStatus::whereHas('eventStatusEvent',function ($query) {
		// 	    $query->where('event_name', 'UDM event Sample 2');
		// 	}
		// )->where('event_status_status','a')->get();
    	return view('orgHead.manage-events', ['events' => $events]);

    }

    public function manageEvent($eventID){
    	$event = Event::where('event_id',$eventID)->first();
    	$eventAttendees = Attendee::where('event_ID', $eventID)->get();
    	$eventAttendeesAccepted = Attendee::where('event_ID', $eventID)->where('att_statusID','1')->get();
    	$eventAttendeesRejected = Attendee::where('event_ID', $eventID)->where('att_statusID','2')->get();
    	$eventAttendeesPending = Attendee::where('event_ID', $eventID)->where('att_statusID',null)->get();
    	$eventStart = date_create($event->event_date_start);
    	$dayNow = date_create(date("Y-m-d"));
    	$eventCountDown = date_diff($eventStart,$dayNow);
    	$eventCountDown = $eventCountDown->format("%R%a");

    	if($eventCountDown == 0){
    		$eventCountDown = "On Going!";
    	}
    	elseif($eventCountDown<0){
    		$eventCountDown = "Event Done";
    	}


    	return view('orgHead.manage-event-dashboard', [
    		'event'=>$event,
    		 'eventAttendees'=>$eventAttendees ,
    		 'eventAttendeesAccepted'=>$eventAttendeesAccepted,
    		 'eventAttendeesRejected'=>$eventAttendeesRejected,
    		 'eventAttendeesPending' => $eventAttendeesPending,
    		 'eventCountDown' => $eventCountDown
    	]);

    }

    public function attendeesPending($eventID){
    	$event = Event::where('event_id',$eventID)->first();
    	$eventAttendees = Attendee::where('event_ID', $eventID)->where('att_statusID', null)->get();

    	return view('orgHead.manage-event-attendees', ['event'=>$event, 'eventAttendees'=>$eventAttendees]);
    }

    public function respondAttendee($eventID, $userID){
    	$attendee =Attendee::where('userID',$userID)->where('event_ID',$eventID)->first();

    	$attendee->att_statusID = request()->get('status');

    	if($attendee->save()){
    		
    		return redirect()->back()->with('success_message', 'Attendee '.$attendee->user->user_fname.' is accepted');
    	}
    	else{
    		return redirect()->back()->with('error_message', 'Sorry there was an error please try again');
    	}


    }

    public function attendeesResponded($eventID){
    	$status = request()->get('status');

    	$event = Event::where('event_id',$eventID)->first();
    	$eventAttendees = Attendee::where('event_ID', $eventID)->where('att_statusID', $status)->get();


    	return view('orgHead.manage-event-responded', ['event'=>$event, 'eventAttendees'=>$eventAttendees, 'status' => $status ]);
    
    }
}
