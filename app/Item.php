<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable =['name','photo','price','description','techonology','category_id'];
	//public $items=['items'];
    public function categories($value=''){
    	return $this->belongsTo('App\Category');
    }
}
