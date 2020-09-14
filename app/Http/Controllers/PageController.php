<?php

namespace App\Http\Controllers;
use App\Item;
use Illuminate\Http\Request;

class PageController extends Controller
{
        public function aboutfun($value='')
    {
        return view('frontend.about');
    }
    public function shopfun($value='')
    {
        $items = Item::all();
        return view('frontend.shop',compact('items'));
    }
    public function portfoliofun($value='')
    {
        return view('frontend.portfolio');
    }
    public function contactfun($value='')
    {
        return view('frontend.contact');
    }
     public function cartfun($value='')
    {
        return view('frontend.cart');
    }
 public function masterfun($value='')
    {
        return view('frontend.master');
    }
    public function checkoutfun($value='')
    {
        return view('frontend.checkout');
    }
     public function portfoliodetailfun($value='')
    {
        return view('frontend.portfoliodetail');
    }
 public function blogfun($value='')
    {
        return view('frontend.blog');
    }
    public function singlefun($value='')
    {
        return view('frontend.single');
    }




   //s masterfunportfoliodetailfun
    //
    public function loginfun($value='')
    {
        return view('frontend.login');
    }
}
