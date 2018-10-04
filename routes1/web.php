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

	Route::get('/', 'EventsController@index')->name('index');

	Route::get('/single-event', function () {
	    return view('event.single-event');
	});

	Route::get('/organization','OrganizationController@index')->name('organization');

	Route::get('/organization/{org}','OrganizationController@show')->name('organization.show');

	Route::get('/events', 'EventsController@index')->name('events');

	Route::get('/home', 'HomeController@index')->name('home');

	Route::get('/logout', 'Auth\LoginController@logout');

	Auth::routes(['verify' => true]);

	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['middleware' => ['adminAuth']], function(){

		Route::get('admin/event-requests', 'EventsController@eventRequests')->name('event.requests');

		Route::get('/event-create', 'EventsController@create')->name('event.create');
		
		Route::post('/event-store', 'EventsController@store')->name('event.store');

	});

});
