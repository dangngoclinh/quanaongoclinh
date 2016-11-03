<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route Admin Login
Route::get('admin/login', 'Admin\AdminController@login')->name('adminlogin');

// Route Admin
Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function() {

    Route::get('/', 'AdminController@index')->name('admin');

	Route::get('category', 'CategoryController@index')->name('admincategory');
	Route::get('category/edit/{id}', 'CategoryController@edit')->where('id', '[0-9]+')->name('admincategoryedit');
	Route::get('category/delete/{id}', 'CategoryController@delete')->where('id', '[0-9]+')->name('admincategorydelete');

	Route::get('product', 'ProductController@index')->name('adminproduct');
	Route::get('product/add', 'ProductController@add')->name('adminproductadd');
	Route::get('product/edit/{id}', 'ProductController@edit')->where('name', '[0-9]+')->name('adminproductedit');
	Route::get('product/delete/{id}', 'ProductController@delete')->where('name', '[0-9]+')->name('adminproductdelete');

	Route::get('order', 'OrderController@index')->name('adminorder');
	Route::get('order/add', 'OrderController@add')->name('adminorderadd');
	Route::get('order/edi/{id}', 'OrderController@edit')->name('adminorderedit');
	Route::get('order/delete/{id}', 'OrderController@delete')->name('adminorderdelete');
	Route::get('order/view/{ỉ}', 'OrderController@view')->name('adminorderview');

	Route::get('admin/email', 'EmailController@index')->name('adminemail');

	Route::get('news', 'NewsController@index')->name('adminnews');
	Route::get('news/add', 'NewsController@add')->name('adminnewsadd');
	Route::get('news/guide', 'NewsController@guide')->name('adminnewsguide');
	Route::get('news/edit/{id}', 'NewsController@edit')->where('id', '[0-9]+')->name('adminnewsedit');
});