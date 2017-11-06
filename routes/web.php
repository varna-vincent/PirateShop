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

Route::get('/', function () {
    return view('index');
});

Route::get('/user/getLoggedinUser',  'UsersController@loggedinUser');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('products', 'ProductsController', ['except' => [ 'create', 'edit' ]]);

Route::group(['middleware' => 'auth'], function() {

	Route::resource('orders', 'OrdersController', ['except' => [ 'create', 'edit' ]]);

	Route::resource('userorderdetails', 'UserOrderDetailsController', ['except' => [ 'create', 'edit' ]]);
}); 