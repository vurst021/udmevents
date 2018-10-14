<?php

namespace App\Http\Controllers;

use App\Organization;
use App\College;
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
        
        
        return view('organization.organization')->with([
                    'organization' => $organization,
                    'colleges' => $colleges,
            ]);
    }

    public function proCol($col_id)
    {

        if($col_id){


            $organization = Organization::where('org_colID', $col_id)->get();
            

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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::all();
        return view('organization.org-create')->with('colleges', $colleges);
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
           'org_name' => 'required',
           'org_description' => 'required',
           'org_slug' => 'required',
           'org_colID' => 'required',
           
        ]);

        if($validator->fails())
        {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $organization = new Organzation();
        $organization->org_name = $request->input('org_name');
        $organization->org_description = $request->input('org_description');
        $organization->org_abbreviation = $request->input('org_slug');
        $organization->org_colID = $request->input('org_colID');
        $organization->org_status = "pending";
        $organization->save();
        
        return view('organization.organization-create');
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
