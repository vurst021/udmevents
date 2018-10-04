<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

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
        $eventRequests = Event::all();
        return view('admin.event-requests',['events' => $eventRequests ]);
    }
}
