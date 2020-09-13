<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = [
    	'name'

    ];
    public function items($value=''){
    	return $this->hasMany('App\Category');
    }
}
