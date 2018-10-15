<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{	



	protected $fillable = [
        'org_name', 'org_head_userID','org_description','org_slug', 'org_colID', 'org_status'
    ];
	public function user(){

		 return $this->belongsToMany('App\User');
	}

	public function organizationEvent(){

		 return $this->belongsTo('App\Event');
	}
}



	
   
