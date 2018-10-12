<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendee extends Model
{
    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'att_statusID','event_ID','userID'
    ];

}
