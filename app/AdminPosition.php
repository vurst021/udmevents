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
    public function adminPosition(){
    	return $this->belongsTo('App\Admin');
    }
}
