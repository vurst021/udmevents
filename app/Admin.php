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
    public function admins(){
    	return $this->belongsTo('App\User');
    }

    public function adminPosition(){
    	return $this->hasOne('App\AdminPositions');
    }
}
