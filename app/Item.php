<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable =['category_id','name','photo','price','description','techonology'];
    //
}
