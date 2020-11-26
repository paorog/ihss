<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NgoList extends Model
{
    protected $table = 'ngo_list';

    protected $fillable = array(
      	'agency',
      	'address',
        'contact_numbers',
        'email',
        'fax',
        'contact_person',
        'conctact_person_position',
        'registration_number',
        'license_number',
        'accredited_number',
        'programs_and_services',
        'service_type',
        'clientele',
        'locations'
  	);

    public function createdby()
    {
        return $this->hasOne('App\User','userid','userid');
    }
}
