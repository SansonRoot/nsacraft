<?php

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

Route::get('/', [
    'as'=>'index',
    'uses'=>'GuestController@index'
]);
Route::get('/category','GuestController@showCategories');
Route::get('/blog','GuestController@getBlog');
Route::get('/products','GuestController@showProducts');


Auth::routes();


Route::group(['prefix'=>'/'],function(){
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::group(['prefix'=>'shop'],function(){
    Route::get('/dashboard','Shop\ShopController@dashboard');
    Route::get('/profile','Shop\ShopController@getProfile');
    Route::get('/my-ads','Shop\ShopController@getMyAds');

});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard');
});

