<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organization;
use App\User;

class DeanController extends Controller
{
    public function showOrganizations(){
    	$organizations = Organization::all();

    	return view('dean.organizations-manage',['organizations' => $organizations]);
    }

    public function showUsers($orgID){
    	$users = User::all();
    	$org = Organization::where('org_id', $orgID)->first();

    	return view('dean.organizations-edit',['users' => $users, 'org'=> $org]);
    }

    public function makeOrgHead($orgID,$userID){

    	$organization=Organization::where('org_id',$orgID)->first();

    	$organization->org_head_userID = $userID;

    	if($organization->save()){
    		return redirect()->back()->with('success_message', $organization->org_name."'s Org. head is updated.");
    	}


    }
}
