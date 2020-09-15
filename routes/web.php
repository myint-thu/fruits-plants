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


Route::resource('categories','CategoryController');
Route::resource('items','ItemController');

Route::resource('categories','CategoryController');
Route::resource('items','ItemController');
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');



Route::get('master','PageController@masterfun')->name('masterpage');
Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('shop','PageController@shopfun')->name('shoppage');
Route::get('portfilio','PageController@portfoliofun')->name('portfoliopage');
Route::get('contact','PageController@contactfun')->name('contactpage');
Route::get('cart','PageController@cartfun')->name('cartpage');
// testing
	// Route::get('blog','PageController@blogfun')->name('blogpage');
// end testing
// testing
		Route::get('shop','PageController@shopfun')->name('shoppage');
// end testing
Route::get('checkout','PageController@checkoutfun')->name('checkoutpage');
Route::get('checkout','PageController@checkoutfun')->name('checkoutpage');
Route::get('portfoliodetail','PageController@portfoliodetailfun')->name('portfoliodetailpage');
Route::get('blog','PageController@blogfun')->name('blogpage');
Route::get('single','PageController@singlefun')->name('singlepage');
Route::get('registerpage','PageController@registerfun')->name('registerpage');
// start testing
	Route::post('orders','OrderController@store')->name('orders');
// end testing

//testing

// Route::get('login','PageController@loginfun')->name('loginpage');

//endtesting




Route::middleware('role:Admin')->group(function (){
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
Route::resource('items','ItemController');

});



Route::get('/testing', function ($value=''){
	return "That is our project testing";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
