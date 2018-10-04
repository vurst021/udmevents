<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrgHead extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'venue_name','venue_descriptions'
    ];
    public function orgHeadUser(){
        return $this->belongsTo('App\User');
    }
}
