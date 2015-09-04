<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Storage extends Model
{
	protected $table = 'storages';

	protected $fillable = [
		'name'
	];

    public function company()
    {
    	return $this->belongsTo('App\Company');
    }

    public function inventory()
    {
    	return $this->hasMany('App\Inventory');
    }
}
