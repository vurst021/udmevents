<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'trans_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'trans_userID', 'trans_eventID', 'trans_paymentID'
    ];

    public function event(){

    	return $this->belongsTo('App\Event','trans_eventID','event_id');

    }

    public function user(){
    	return $this->belongsTo('App\User', 'trans_userID', 'user_id');
    }

    public function payment(){
    	return $this->hasOne('App\PaymentMethod','trans_paymentID', 'payment_id');
    }
}
