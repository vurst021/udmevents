<?php

namespace App;

use App\Traits\Attendance;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    use Attendance;

    /**
     *sets the primary key
     *
     *
     *@var string
     */
    protected $primaryKey = 'user_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_fname', 'user_mname', 'user_lname', 'email', 'user_slug', 'user_gender', 'user_contact', 'user_type', 'email_token','password', 'email_verified_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin(){

        return $this->hasOne('App\Admin', 'user_ID', 'user_id');

    }

    // gives full name
    public function niceName(){
        $name = $this->user_fname ." ". $this->user_mname ." ". $this->user_lname;
        return $name;
    }

    public function orgHead(){

        return $this->hasOne('App\Organization', 'org_head_userID', 'user_id');

    }

    public function attendee(){

        return $this->hasMany('App\Attendee', 'userID', 'user_id');

    }

    public function transaction(){

        return $this->hasMany('App\Transaction', 'trans_userID', 'user_id');

    }
}
