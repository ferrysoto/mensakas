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
Route::get('customer/{id}', 'CustomerController@destroy')->name('customer.remove');

// Suppliers routes
Route::get('suppliers', 'SupplierController@index')->name('supplier.index');
Route::get('suppliers/details/{id}', 'SupplierController@show')->name('supplier.details');
Route::get('suppliers/create', 'SupplierController@create')->name('supplier.create');
Route::post('suppliers/create', 'SupplierController@store')->name('supplier.create');
Route::get('supplier/{id}', 'SupplierController@destroy')->name('supplier.remove');
