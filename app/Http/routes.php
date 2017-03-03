<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'ProductController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/add-to-cart/{id}',[
	'uses'=>'ProductController@getAddToCart',
	'as'=>'product.addToCart'
	]);
Route::get('/basket', 'ProductController@getCart');

	Route::get('/deal', function(){
		return view('deal');
	});
Route::group(['middleware'=>'admin'],function(){

	Route::get('/admin', function(){
		return view('admin.index');
	});
	Route::resource('admin/users','AdminUsersController');
	Route::resource('admin/products','AdminProductsController');
	Route::resource('admin/categories','AdminCategoriesController');

});
