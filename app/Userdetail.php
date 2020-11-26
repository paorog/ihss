<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Userdetail extends Model
{
      protected $table = 'usersinfo';

      protected $fillable = array(
      	'userid',
      	'firstname',
      	'middlename',
        'lastname',
        'gender',
        'profile_photo_file',
        'profile_photo_fname',
        'cover_photo_file',
        'cover_photo_fname',
      	'address',
      	'facebook_url',
        'twitter_url',
      	'instagram_url',
      	'birthday',
        'mobile_number',
        'about_me',
        'company',
        'occupation',
        'company_adrs',
        'college_name',
        'college_course',
        'college_yr_grad',
        'college_adrs',
        'school_name',
        'school_yr_grad',
        'school_adrs',
  	);

    public function useraccount()
    {
        return $this->hasOne('App\User','userid','userid');
    }

}
