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

Auth::routes();
iets leuks is super cool en gaaf, niettus
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/artists', 'ArtistsController2');
// Route::get('/artists', 'ArtistsController@index');  
// Route::post('/artists', 'ArtistsController@store');  
// Route::get('/artists/create', 'ArtistsController@create');  
// Route::get('/artists/{artist}', 'ArtistsController@show');
// Route::get('/artists/{artist}/edit', 'ArtistsController@edit');  
// Route::patch('/artists/{artist}', 'ArtistsController@update');  
// Route::delete('/artists/{artist}', 'ArtistsController@destroy');

iets leuks, gaafs en cool. 