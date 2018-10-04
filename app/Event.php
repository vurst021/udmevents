<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'event_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_name', 'event_description', 'event_orgID', 'event_date_time_start', 'event_date_time_end', 'event_typeID', 'event_fee', 'event_status', 'event_place'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function eventVenue(){
        return $this->hasOne('App\Admin');
    }
    public function eventStatus(){
        return $this->hasMany('App\EventStatus', 'event_id');
    }
}
