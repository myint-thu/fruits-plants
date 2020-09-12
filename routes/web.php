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
Route::get('dashboard','BackendController@dashboardfun')->name('dashboardpage');


Route::get('/testing', function ($value=''){
	return "That is our project testing";
});
