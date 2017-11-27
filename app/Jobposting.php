<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jobposting extends Model
{
    protected $table = 'Jobpostings';

    protected $fillable = array(
      	'postid',
        'userid',
      	'jobtitle',
      	'compname',
      	'compadrs',
      	'logofile',
      	'logofilename',
      	'jobdesc'
  	);

    public function user()
    {
        return $this->hasOne('App\User','userid','userid');
    }
}
