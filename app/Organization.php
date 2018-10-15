<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'org_id';

    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
	protected $fillable = [
        'org_name', 'org_head_userID','org_description','org_slug', 'org_colID', 'org_status'
    ];
	public function user(){

		 return $this->belongsTo('App\User', 'org_head_userID', 'user_id');
	}

	public function organizationEvent(){

		 return $this->belongsTo('App\Event');
	}
}



	
   
