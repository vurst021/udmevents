<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;
use App\Event as Event;
use App\EventStatus;

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
        Event::create([
           'event_name' => $request->input('title'),
           'event_description' => $request->input('description'),
           'event_date_time_start' => date("Y-m-d H:i:s", strtotime($request->input('start_date_time'))),
           'event_date_time_end' => date("Y-m-d H:i:s", strtotime($request->input('end_date_time'))),
           'event_fee' => $request->input('fee'),
           'event_typeID' => $request->input('type'),
           'event_place' => $request->input('place'),
           'event_orgID' => "38",
           'event_status' => "p"

        ]);
        return view('event.event-create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

}
