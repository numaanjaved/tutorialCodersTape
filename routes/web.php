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

Route::get('/', 'HomeController@index')->name('home');

// Route::resource('contacts', 'ContactController');

Route::get('contacts', 'ContactController@create')->name('contacts.create');
Route::post('contacts/store', 'ContactController@store')->name('contacts.store');

Route::get('about', 'AboutController@index')->name('about');


// Route::get('customers', 'CustomersController@index')->name('customers.index');
// Route::get('customers/create', 'CustomersController@create')->name('customers.create');
// Route::post('customers/store', 'CustomersController@store')->name('customers.store');
// Route::get('customers/{customer}', 'CustomersController@show')->name('customers.show');
// Route::get('customers/edit/{customer}', 'CustomersController@edit')->name('customers.edit');
// Route::patch('customers/{customer}', 'CustomersController@update')->name('customers.update');
// Route::delete('customers/{customer}', 'CustomersController@destroy')->name('customers.delete');

Route::resource('customers', 'CustomerController');

