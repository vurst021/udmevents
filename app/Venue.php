<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'venue_name','venue_descriptions'
    ];
    public function venueEvents(){
        return $this->belongsTo('App\Event');
    }
}
