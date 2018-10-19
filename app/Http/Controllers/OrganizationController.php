<?php

namespace App\Http\Controllers;

use App\College;    
use App\Organization;

use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $colleges = College::all();
         $organization = Organization::inRandomOrder()->take(20)->get();

         return view('organization.organization',
                ['colleges' => $colleges, 'organization'=>$organization ]);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($org_slug)
    {
        $organization = Organization::where('org_slug', $org_slug)->firstOrFail();
         return view('organization.single-org')->with('organization', $organization);
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

    public function proCol($col_id)
    {
         if($col_id){
             $organization = Organization::where('org_colID', $col_id)->get();
            
          return view('org')->with('organization', $organization);
            $colleges = College::all();  
         }else{
            
            $colleges = College::all();
            $organization = Organization::inRandomOrder()->take(20)->get();
        
        }
        
        return view('organization.organization')->with([
                    'organization' => $organization,
                    'colleges' => $colleges,
            ]);
               
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
