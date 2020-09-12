<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.master');
    
});

//soethuwin


Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('shop','PageController@shopfun')->name('shoppage');
Route::get('portfilio','PageController@portfoliofun')->name('portfoliopage');
Route::get('contact','PageController@contactfun')->name('contactpage');
Route::get('cart','PageController@cartfun')->name('cartpage');




Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

Route::get('/testing', function ($value=''){
	return "That is our project testing";
});
