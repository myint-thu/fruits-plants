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
//=======
Route::resource('categories','CategoryController');
Route::resource('items','ItemController');
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');

//>>>>>>> a83c7b7c5b3e1704108f35c7f65116fc161297a4

//soethuwin

Route::get('master','PageController@masterfun')->name('masterpage');
Route::get('about','PageController@aboutfun')->name('aboutpage');
Route::get('shop','PageController@shopfun')->name('shoppage');
Route::get('portfilio','PageController@portfoliofun')->name('portfoliopage');
Route::get('contact','PageController@contactfun')->name('contactpage');
Route::get('cart','PageController@cartfun')->name('cartpage');
// testing
		Route::get('shop','PageController@shopfun')->name('shoppage');
// end testing
Route::get('checkout','PageController@checkoutfun')->name('checkoutpage');
Route::get('checkout','PageController@checkoutfun')->name('checkoutpage');
Route::get('portfoliodetail','PageController@portfoliodetailfun')->name('portfoliodetailpage');
Route::get('blog','PageController@blogfun')->name('blogpage');
Route::get('single','PageController@singlefun')->name('singlepage');
Route::get('registerpage','PageController@registerfun')->name('registerpage');





//<<<<<<< HEAD
////>>>>>>> efdb83e657a40eac626457bdc2564f977ddf9f03
Route::middleware('role:Admin')->group(function (){
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');
Route::resource('items','ItemController');

});


//=======
//>>>>>>> a83c7b7c5b3e1704108f35c7f65116fc161297a4
Route::get('/testing', function ($value=''){
	return "That is our project testing";
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
