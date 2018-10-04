<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'admin_positionID'
    ];

    public function adminsUser()
    {
    	return $this->belongsTo('App\User');
    }

    public function adminAdminPosition()
    {
    	return $this->hasOne('App\AdminPositions');
    }

    public function adminEventStatuses()
    {
    	return $this->hasMany('App\EventStatus');
    }
}
