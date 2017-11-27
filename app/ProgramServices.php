<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProgramServices extends Model
{
    protected $table = 'programservices';

    protected $fillable = array(
      	'field_office',
      	'center_name',
        'center_adrs',
        'contact_number',
        'center_head',
        'accredited',
        'userid',
        'delete_flag',
        'deleted_at',
        'deleted_by'
  	);

    public function createdby()
    {
        return $this->hasOne('App\User','userid','userid');
    }

}
