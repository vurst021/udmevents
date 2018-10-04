<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminPosition extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'position_name'
    ];
    public function adminPositionAdmin(){
    	return $this->belongsTo('App\Admin');
    }
}
