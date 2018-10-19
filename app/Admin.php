<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'admin_id';

    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_ID', 'admin_positionID'
    ];

    public function admins(){
    	return $this->belongsTo('App\User', 'user_ID', 'user_id');
    }

    public function adminPosition(){
    	return $this->hasOne('App\AdminPosition','position_id', 'admin_positionID');
    }

    public function eventStatus(){
        return $this->hasMany('App\EventStatus','admin_ID','admin_id' );
    }
}
