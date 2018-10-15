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



Route::group(['middleware' => ['web']], function(){

	Route::get('/', 'EventController@index')->name('index');
	Route::post('/event-store', 'EventController@store')->name('event.store');
			
	// Route::get('/', 'EventController@index')->name('home');
	Route::get('/logout', 'Auth\LoginController@logout');

	Route::get('/verifyemail/{userEncEmail?}', 'UserController@userVerify')->name('userVerify');

	Auth::routes(['verify' => true]);

	Route::get('/event-create', 'EventController@create')->name('event.create');

	Route::get('/org-create', 'OrganizationController@create')->name('org.create');

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

		Route::get('/organization/sortby/{col}', 'OrganizationController@proCol')->name('organization.proCol');

		Route::get('/events', 'EventController@show')->name('events');


		Route::get('/sortby/{col}', 'EventController@catSearch')->name('event.catSearch');

		// orgHead middleware
		Route::group(['middleware' => ['orgHeadAuth']], function(){

		});

		Route::get('orgHead/manage-events', 'OrgHeadController@manageEvents')->name('events.manage');
		Route::get('orgHead/manage-event/{eventID?}', 'OrgHeadController@manageEvent')->name('event.manage');
		Route::get('orgHead/attendees-pending/{eventID?}','OrgHeadController@attendeesPending')->name('event.attendees.pending');
		Route::get('orgHead/attendee-status/{eventID?}/{userID?}/', 'OrgHeadController@respondAttendee')->name('attendee.respond');
		Route::get('/orgHead/attendee/{eventID?}/', 'OrgHeadController@attendeesResponded')->name('attendees.responded');

		// admin middleware

		Route::group(['middleware' => ['adminAuth']], function(){

			Route::get('admin/event-accept/{eventID?}', 'AdminController@acceptEventRequest')->name('event.accept');

			Route::get('admin/event-reject/{eventID?}', 'AdminController@rejectEventRequest')->name('event.reject');

			Route::get('admin/event-requests', 'AdminController@eventRequests')->name('event.requests');

			Route::get('admin/org-requests', 'AdminController@orgRequests')->name('org.requests');

			Route::get('admin/event-accepted', 'AdminController@acceptedEvents')->name('event.accepted');

			Route::get('admin/event-rejects', 'AdminController@rejectedEvents')->name('event.rejected');

			

		});
	});
});	
});
