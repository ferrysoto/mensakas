<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Customers routes
Route::get('customers', 'CustomerController@index')->name('customer.index');
Route::get('customers/details/{id}', 'CustomerController@show')->name('customer.details');
Route::get('customers/create', 'CustomerController@create')->name('customer.create');
Route::post('customers/create', 'CustomerController@store')->name('customer.create');
Route::post('customers/update', 'CustomerController@update')->name('customer.update');
Route::get('customer/{id}', 'CustomerController@destroy')->name('customer.remove');

// Suppliers routes
Route::get('suppliers', 'SupplierController@index')->name('supplier.index');
Route::get('suppliers/details/{id}', 'SupplierController@show')->name('supplier.details');
Route::get('suppliers/create', 'SupplierController@create')->name('supplier.create');
Route::post('suppliers/create', 'SupplierController@store')->name('supplier.create');
Route::post('suppliers/update', 'SupplierController@update')->name('supplier.update');
Route::get('supplier/{id}', 'SupplierController@destroy')->name('supplier.remove');

// Products routes
Route::get('products', 'ProductController@index')->name('product.index');
Route::get('products/details/{id}', 'ProductController@show')->name('product.details');
Route::get('products/create', 'ProductController@create')->name('product.create');
Route::post('products/create', 'ProductController@store')->name('product.create');
Route::post('products/update', 'ProductController@update')->name('product.update');
Route::get('products/{id}', 'ProductController@destroy')->name('product.remove');

// Order index
Route::get('orders', 'OrderController@index')->name('order.index');
// Route::get('products/details/{id}', 'ProductController@show')->name('product.details');
// Route::get('products/create', 'ProductController@create')->name('product.create');
// Route::post('products/create', 'ProductController@store')->name('product.create');
// Route::post('products/update', 'ProductController@update')->name('product.update');
// Route::get('products/{id}', 'ProductController@destroy')->name('product.remove');
