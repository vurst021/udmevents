<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class College extends Model
{
    

	protected $fillable = [
       'col_name','col_slugs'
    ];

    public function organization(){

		 return $this->belongsToMany('App\Organization');
		 
	}

}
