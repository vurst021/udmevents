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
	Auth::routes(['verify' => true]);

	Route::get('/event-create', 'EventController@create')->name('event.create');

Route::group(['middleware' => ['auth']], function(){
	Route::group(['middleware' => ['verified']], function(){

		Route::get("/profile/{slug}", 'ProfileController@index');

		Route::get('/single-event/{eventID?}', 'EventController@viewEvent')->name('event.view');

		Route::get('/organization','OrganizationController@index')->name('organization');

		Route::get('/organization/{org}','OrganizationController@show')->name('organization.show');

		Route::get('/events', 'EventController@show')->name('events');

		Route::group(['middleware' => ['adminAuth']], function(){

			Route::get('admin/event-accept/{eventID?}', 'AdminController@acceptEventRequest')->name('event.accept');

			Route::get('admin/event-reject/{eventID?}', 'AdminController@rejectEventRequest')->name('event.reject');

			Route::get('admin/event-requests', 'AdminController@eventRequests')->name('event.requests');
			

		});
	});
});	
});
