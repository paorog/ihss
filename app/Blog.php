<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blogs';

    protected $fillable = array(
    	'blogid',
    	'categoryid',
    	'userid',
      'thumbfile',
      'thumbfname',
      'bannerfile',
      'bannerfname',
    	'title',
    	'content',
      'tags',
    	'views',
    	'privacy',
      'deleted_at',
      'deleted_by'
	);

    public function category()
    {
        return $this->hasOne('App\Category','categoryid','categoryid');
    }

    public function user()
    {
        return $this->hasOne('App\User','userid','userid');
    }
}
