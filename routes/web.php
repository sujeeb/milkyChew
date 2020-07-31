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


// Route::get('/contact', function() {
// 	return view('/contact');
// });
// Route::post('/contact/store', 'ContactController@store')->name('contact.store');



Route::group(['middleware' => ['web']], function () {

	Route::get('/', function () {
	    return view('index');
	});


	Route::get('singleComment', function () {
	    return view('singleComment');
	});

		//Create Profile Page Route...
	Route::get('user/{id}', 'HomeController@show');



Route::group(['middleware' => ['auth']], function () {
	
	// Create comment Route...
	Route::get('feedback/contact', 'ContactController@index');
	Route::post('/contact/store', 'ContactController@store')->name('contact.store');

	// Read a single comment Route...
	Route::get('feedback/contact/{id}', 'ContactController@show');

	// Delete a comment Route...
	Route::delete('delete/contact/{id}', 'ContactController@destroy');

	// Edit or update comments Route...
	Route::get('edit/contact/{id}', 'ContactController@edit');
	Route::put('edit/contact/{id}', 'ContactController@update');

	//Create Profile Page Route...
	Route::get('user/{id}', 'HomeController@show');

	// Edit or update the profile of the user...
	Route::get('update/user/{id}', 'HomeController@edit');
	Route::put('update/user/{id}', 'HomeController@update');

});


	 });

Auth::routes();

