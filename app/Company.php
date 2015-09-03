<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    public function users()
    {
    	return $this->belongsToMany('App\User');
    }

    public function storage()
    {
    	return $this->belongsToMany('App\Storage');
    }
}
