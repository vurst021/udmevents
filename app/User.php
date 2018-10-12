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
        'user_fname', 'user_mname', 'user_lname', 'email', 'user_slug', 'user_gender', 'user_contact', 'user_type', 'email_token','password'
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
}
