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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => 'auth'], function(){
	Route::group(['prefix'=>'product', 'as'=>'product.', 'namespace'=>'Products'], function(){
		Route::get('add', 'ProductsController@add_product')->name('add');

		Route::get('edit', 'ProductsController@edit_product')->name('edit');
	});
	
});
