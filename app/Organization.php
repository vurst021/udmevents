<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
	public function user(){

		 return $this->belongsToMany('App\User');
	}
}



	
   
