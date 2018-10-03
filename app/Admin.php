<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    public function admins(){
    	return $this->belongsTo('App\User');
    }

    public function adminPosition(){
    	return $this->hasOne('App\AdminPositions');
    }
}
