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

Route::get('admin', 'Admin\AdminController@index')->name('admin');

Route::get('admin/login', 'Admin\AdminController@login')->name('adminlogin');

Route::get('admin/category', 'Admin\CategoryController@index')->name('admincategory');

Route::get('admin/category/edit/{id}', 'Admin\CategoryController@edit')->where('id', '[0-9]+')->name('admincategoryedit');

Route::get('admin/category/delete/{id}', 'Admin\CategoryController@delete')->where('id', '[0-9]+')->name('admincategorydelete');

Route::get('admin/product', 'Admin\ProductController@index')->name('adminproduct');

Route::get('admin/product/add', 'Admin\ProductController@add')->name('adminproductadd');

Route::get('admin/product/edit/{id}', 'Admin\ProductController@edit')->where('name', '[0-9]+')->name('adminproductedit');

Route::get('admin/product/delete/{id}', 'Admin\ProductController@delete')->where('name', '[0-9]+')->name('adminproductdelete');

Route::get('admin/order', 'Admin\OrderController@index')->name('adminorder');

Route::get('admin/order/add', 'Admin\OrderController@add')->name('adminorderadd');

Route::get('admin/order/edi/{id}', 'Admin\OrderController@edit')->name('adminorderedit');

Route::get('admin/order/delete/{id}', 'Admin\OrderController@delete')->name('adminorderdelete');

Route::get('admin/order/view/{ỉ}', 'Admin\OrderController@view')->name('adminorderview');

Route::get('admin/email', 'Admin\EmailController@index')->name('adminemail');





