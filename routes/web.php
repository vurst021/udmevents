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

/*
|--------------------------------------------------------------------------
| Middleware Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/join',function(){
	return Auth::user()->join();
});

Route::group(['middleware' => ['web']], function(){

	Route::get('/', 'EventController@index')->name('index');
	Route::post('/event-store', 'EventController@store')->name('event.store');
			
	// Route::get('/', 'EventController@index')->name('home');
	Route::get('/logout', 'Auth\LoginController@logout');

	Route::get('/verifyemail/{userEncEmail?}', 'UserController@userVerify')->name('userVerify');

	Auth::routes(['verify' => true]);

	Route::get('/event-create', 'EventController@create')->name('event.create');

	Route::get('/join-event/{userID?}', 'EventController@join')->name('event.join');

	Route::get('/requests', 'AdminController@joinEventRequest')->name('join.request');
//gives access to users
Route::group(['middleware' => ['auth']], function(){
	Route::group(['middleware' => ['verified']], function(){

		Route::get("/profile/{slug}", 'ProfileController@index');

		// Route::get("/changePhoto" ,function(){

		// 	return view("profile.pic");
		// });

		// Profile Controller
		Route::post('/uploadPhoto', 'ProfileController@uploadPhoto');
			
		Route::get('/editProfile', 'ProfileController@editProfileForm');

		Route::post('/updateProfile', 'ProfileController@updateProfile');



		Route::get('/single-event/{eventID?}', 'EventController@viewEvent')->name('event.view');

		Route::get('/organization','OrganizationController@index')->name('organization');

		Route::get('/organization/{org}','OrganizationController@show')->name('organization.show');

		Route::get('/events', 'EventController@show')->name('events');
<<<<<<< HEAD

<<<<<<< HEAD
		Route::get('/sortby/{col}', 'EventController@catSearch')->name('event.catSearch');

=======
		// admin middleware
>>>>>>> 66840830348baf7099e6d6e45f23922f9c8d2a0f
=======
>>>>>>> parent of ff4b5b3... octber 14 2018 leo
		Route::group(['middleware' => ['adminAuth']], function(){

			Route::get('admin/event-accept/{eventID?}', 'AdminController@acceptEventRequest')->name('event.accept');

			Route::get('admin/event-reject/{eventID?}', 'AdminController@rejectEventRequest')->name('event.reject');

			Route::get('admin/event-requests', 'AdminController@eventRequests')->name('event.requests');
<<<<<<< HEAD

<<<<<<< HEAD
			Route::get('admin/org-requests', 'AdminController@orgRequests')->name('org.requests');
=======
			Route::get('admin/event-accepted', 'AdminController@acceptedEvents')->name('event.accepted');

			Route::get('admin/event-rejects', 'AdminController@rejectedEvents')->name('event.rejected');
>>>>>>> 66840830348baf7099e6d6e45f23922f9c8d2a0f
=======
>>>>>>> parent of ff4b5b3... octber 14 2018 leo
			

		});
	});
});	
});
