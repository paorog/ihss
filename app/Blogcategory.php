<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blogcategory extends Model
{
    protected $table = 'blogcategories';

    protected $fillable = array(
    	'name',
    	'created_by',
	);

    public function blog()
    {
        return $this->belongsTo('App\Blog','categoryid','categoryid');
    }
}
