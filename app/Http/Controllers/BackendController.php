<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
	//soe thu win
	 public function dashboardfun($value='')
    {
        return view('backend');
    }
    //
}
