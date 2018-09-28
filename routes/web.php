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
    return view('index');
})->name('index');

Route::get('/single-event', function () {
    return view('events.single-event');
});

Route::get('/organization','OrganizationController@index')->name('organization');
Route::get('/organization/{org}','OrganizationController@show')->name('organization.show');





Route::get('/events', 'EventsController@index')->name('events');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout');
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

	Route::get('/event-create', 'EventsController@create')->name('event.create');
	Route::post('/event-store', 'EventsController@store')->name('event.store');

});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
