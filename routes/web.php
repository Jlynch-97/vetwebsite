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

Route::get('welcome', function() {
	return view('welcome');
});

Route::get('about', function() {
	return view('about');
});

Route::get('location', function() {
	return view('location');
});

Route::get('contact', function() {
	return view('contact');
});

Auth::routes();

/*using named routes for in future if urls need changed, it means 
they don't need changed throughout the whole program*/

Route::get('/home', 'HomeController@index');

Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('consultant')->group(function(){
	Route::get('/login', 'Auth\ConsultantLoginController@showLoginForm')->name('consultant.login');
	Route::post('/login', 'Auth\ConsultantLoginController@login')->name('consultant.login.submit');
	Route::get('/', 'ConsultantController@index')->name('consultant.dashboard');
});

Route::prefix('consultant')->group(function(){
	Route::get('/', 'ConsultantController@bookings')->name('consultant.bookings');
	Route::get('/', 'ConsultantController@reports')->name('consultant.reports');
	Route::get('/', 'ConsultantController@animalrecords')->name('consultant.animalrecords');
	Route::get('/', 'ConsultantController@editcancel')->name('consultant.editcancelbookings');
});