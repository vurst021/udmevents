<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\User;
use Validator;
use Hash;

class UserController extends Controller
{
    public function postSignIn(Request $request)
    {
    	$user = User::first();
    	echo $user;
    	echo $request['email'];
    	echo $request['password'];
    	Auth::login($user);
	    		Session::save();
	    		echo Auth::user()->lname;
    // dd(session('commentTitle')); // This dumps the title string as expected...

    //Saving the session...
    Session::save();
	    		// return redirect()->route('index');

        // if(Auth::attempt(['email' => $request['email'], 'password' => Hash::make($request['password'])])){

        //     return redirect()->route('index');

        // }
         // return redirect()->back();

    }

    public function testSignIn()
    {
        $user = User::first();
        // Auth::login($user);
        echo "oi";
        Auth::login($user);
         

    		// $user = $request->except('_token');
    		echo Auth::user()->lname;



        // if(Auth::attempt(['email' => $request['email'], 'password' => Hash::make($request['password'])])){

        //     return redirect()->route('index');

        // }
         // return redirect()->back();

    }
}
