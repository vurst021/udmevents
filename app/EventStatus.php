<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventStatus extends Model
{
    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'event_status_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_ID', 'admin_ID','event_status_status','event_status_comment'
    ];
    public function eventStatusEvent(){

    	return $this->belongsTo('App\Event','event_ID','event_id');

    }
    public function eventStatusAdmin(){

    	return $this->belongsTo('App\Admin');

    }
}
