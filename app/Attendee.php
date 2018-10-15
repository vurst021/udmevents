<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $primaryKey = 'attendees_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'att_statusID','event_ID','userID'
    ];

    public function attendeeEvent(){

    	return $this->belongsTo('App\Event','event_ID','event_id');

    }
    public function user(){
    	return $this->belongsTo('App\User', 'userID', 'user_id');
    }

}
