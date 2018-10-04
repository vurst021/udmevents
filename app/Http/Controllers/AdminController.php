<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventStatus;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    /**
     * Show the event requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventRequests()
    {
 		$adminType = Auth::user()->isAdmin->admin_positionID;
        $eventRequests = EventStatus::all()->where('admin_ID',$adminType)->where('event_status_status',"p");

        return view('admin.event-requests',['events' => $eventRequests ]);

    }

    /**
     * Show the event requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function acceptEventRequest($eventID)
    {
 		$adminType = Auth::user()->isAdmin->admin_positionID;

        $eventRequest = EventStatus::where('admin_ID',$adminType)->where('event_ID', $eventID)->first();
        $eventRequest->event_status_status = "a";
        $eventRequest->save();

 		if($adminType != 5){
 			$adminType++;
 		
	        $event = Event::where("event_id",$eventID)->first();

	        $eventStatus = new EventStatus();

	        $eventStatus->admin_id = $adminType;
			$eventStatus->event_status_status = "p";
			$event->eventStatus()->save($eventStatus);
		}

        return redirect()->back();

    }

    /**
     * Reject the event request.
     *
     * @return \Illuminate\Http\Response
     */
    public function rejectEventRequest($eventID)
    {
 		$adminType = Auth::user()->isAdmin->admin_positionID;

        $eventRequest = EventStatus::where('admin_ID',$adminType)->where('event_ID', $eventID)->first();
        $eventRequest->event_status_status = "r";
        $eventRequest->save();

        return redirect()->back();

    }


}
