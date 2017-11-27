<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';

    protected $fillable = array(
      	'userid',
      	'accesstype',
      	'username',
      	'email',
      	'password',
      	'password_history',
      	'invalid_login',
      	'login_status',
      	'payment',
      	'status',
      	'approverid'
  	);

    public function userdetail()
    {
        return $this->hasOne('App\Userdetail','userid','userid');
    }

    public function approver()
    {
        return $this->hasOne('App\User','userid','approverid');
    }

    public function status()
    {
        return $this->hasOne('App\System','systemcode','status');
    }
}
