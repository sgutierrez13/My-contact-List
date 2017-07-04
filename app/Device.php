<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    /**
    * Association of the table device with the model Device
    */
    protected $table = 'device';

    /**
    * Get the device for the contact.
    */
    public function contacts()
    {
        return $this->hasMany('App\Contact');
    }
	
}
