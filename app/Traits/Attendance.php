<?php

namespace App\Traits;

use App\Attendee;

trait Attendance
{
    public function join(){

    	echo 'joining event';
    }

    public function joinEvent($id)
    {

    	$Attend = Attendee::create([

    		'userID' => $this->user_id, //gustong mag join
    		'event_ID' => $id,
    	]);

    	if($Attend)
    	{
    		return $Attend;
    	}

    	return 'failed';
    }
}
