<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Customers routes
Route::get('customers/index', 'CustomerController@index')->name('customer.index');
Route::get('customers/details/{id}', 'CustomerController@show')->name('customer.details');
