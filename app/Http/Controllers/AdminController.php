<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\EventStatus;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    protected $adminType;
    /**
     * Show the event requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function eventRequests()
    {
        $eventRequests = EventStatus::all()->where('admin_ID',$adminType)->where('event_status_status',"p");

        return view('admin.event-requests',['events' => $eventRequests ]);

    }

    /**
     * Show the event requests.
     *
     * @return \Illuminate\Http\Response
     */
    public function acceptEventRequests($eventID)
    {
        $eventRequests = EventStatus::all()->where('admin_ID',$adminType)->where('event_status_status',"p");

        return view('admin.event-requests',['events' => $eventRequests ]);

    }


}
