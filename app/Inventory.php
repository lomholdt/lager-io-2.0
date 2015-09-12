<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{

	protected $table = 'inventory';

	protected $fillable = ['name', 'storage_id'];
    
    public function storage()
    {
    	return $this->belongsTo('App\Storage');
    }
}
