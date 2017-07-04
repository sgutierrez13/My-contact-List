<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    /**
    * Association of the table contact with the model Contact
    */
    protected $table = 'contact';

    /**
 	* Get the contact that owns the device.
 	*/
	public function device()
    {
    	return $this->belongsTo('App\Device');
    }
}
