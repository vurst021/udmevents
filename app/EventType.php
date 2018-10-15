<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventType extends Model
{
    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'event_types_id';
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'event_types_name', 'event_types_description'
    ];
}
