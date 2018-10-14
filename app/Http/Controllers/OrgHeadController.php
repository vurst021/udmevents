<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;

class OrgHeadController extends Controller
{
    //
    public function manageEvents(){

    	return view('orgHead.manage-events');

    }
}
