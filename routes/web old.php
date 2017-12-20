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

    Route::get('login','Shop\Auth\LoginController@showLoginForm')->name('shop.login');
    Route::get('register','Shop\Auth\RegisterController@showRegistrationForm')->name('shop.register');
    Route::get('verify','Shop\Auth\RegisterController@showVerifyForm')->name('shop.verify');

    Route::get('/dashboard','Shop\ShopController@dashboard')->name('shop.dashboard');
    Route::get('/profile','Shop\ShopController@getProfile')->name('shop.profile');
    Route::get('/my-ads','Shop\ShopController@getMyAds');

    Route::post('login','Shop\Auth\LoginController@login')->name('shop.login');


});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard','Admin\AdminController@dashboard');
    Route::get('admins','Admin\AdminController@showAdmins');
    Route::get('addadmin','Admin\AdminController@showAddAdmin');
    Route::get('users','Admin\AdminController@showUsers');
    Route::get('adduser','Admin\AdminController@showAddUser');
    Route::get('shops','Admin\AdminController@showShops');
    Route::get('addshop','Admin\AdminController@showAddShop');
    Route::get('products','Admin\AdminController@showProducts');
    Route::get('addproduct','Admin\AdminController@showAddProduct');
    Route::get('categories','Admin\AdminController@showCategories');
    Route::get('addcategory','Admin\AdminController@showAddCategory');
    Route::get('orders','Admin\AdminController@showOrders');

    Route::get('login','Admin\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::get('register','Admin\Auth\RegisterController@showRegistrationForm')->name('admin.register');


});

