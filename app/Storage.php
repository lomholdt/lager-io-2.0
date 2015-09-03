<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
	protected $table = 'storages';

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }
}
