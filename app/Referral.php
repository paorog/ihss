<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Referral extends Model
{
    protected $table = 'referrals';

    protected $fillable = array(
        'referralid',
        'userid',
      	'contact_number',
      	'email',
        'message'
  	);

    public function createdby()
    {
        return $this->hasOne('App\User','userid','userid');
    }

    public function user()
    {
        return $this->hasOne('App\User','userid','userid');
    }

}
