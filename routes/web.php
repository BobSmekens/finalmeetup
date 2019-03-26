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
Route::get('/', 'AppController@showWelcome');  
Route::get('/login', 'AppController@showLogin');  
Route::get('/signup', 'AppController@showSignup'); 
Route::get('/calendar', 'AppController@showCalendar'); 
Route::delete('/calendar/{id}', 'AppController@deleteCalendarItem'); 
Route::get('/registered', 'UserController@registered');

Route::get('/account/{id}/chat', 'ChatController@index');
Route::post('/account/{id}/chat', 'ChatController@sendMessage');

Route::post('/uploadphoto', 'UserController@uploadPhoto');

Route::get('/calender', 'CalenderController@index');
Route::get('/activities/{id}/meetup', 'AppController@addToMeetup');


Route::resource('/account', 'UserController');
Route::resource('/activities', 'ActivitiesController');
Route::get('/skillup', 'AppController@indexSkillup');
Auth::routes();

Route::get('search', 'AutoCompleteController@index');
Route::get('autocomplete', 'AutoCompleteController@search');
Route::get('/loggedinsucces', 'AppController@loggedInSucces');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::resource('/account', 'AccountController');

// Route::get('/artists', 'ArtistsController@index');  
// Route::post('/artists', 'ArtistsController@store');  
// Route::get('/artists/create', 'ArtistsController@create');  
// Route::get('/artists/{artist}', 'ArtistsController@show');
// Route::get('/artists/{artist}/edit', 'ArtistsController@edit');  
// Route::patch('/artists/{artist}', 'ArtistsController@update');  
// Route::delete('/artists/{artist}', 'ArtistsController@destroy');  