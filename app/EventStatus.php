<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    //
    public function eventStatusEvent(){

    	return $this->belongsTo('App\Event');

    }
    public function eventStatusAdmin(){

    	return $this->belongsTo('App\Admin');

    }
}
