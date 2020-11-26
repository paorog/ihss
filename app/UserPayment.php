<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserPayment extends Model
{
    protected $table = 'userpayments';
    
    protected $fillable = array(
        'userid',
        'payment_original',
        'payment_fname'
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
