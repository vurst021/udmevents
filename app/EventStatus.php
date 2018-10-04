<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    //
    public function eventStatusEvent(){

    	return $this->belongsTo('App\Event','event_ID','event_id');

    }
    public function eventStatusAdmin(){

    	return $this->belongsTo('App\Admin');

    }
}
