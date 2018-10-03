<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPosition extends Model
{
    //
    public function adminPosition(){
    	return $this->belongsTo('App\Admin');
    }
}
