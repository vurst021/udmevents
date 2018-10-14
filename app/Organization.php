<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{






	protected $fillable = [
        'org_name','org_slugs', 'org_headID', 'org_colID'
    ];


   	public function orgCollege(){
   		return $this->hasOne('App\College');

   	}


	public function event(){

		 return $this->belongsTo('App\Event');
	}

	
}



	
   
