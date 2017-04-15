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

Auth::routes();

Route::get('/', 'HomeController@index');

Route::resource('home', 'HomeController');

// event pages
Route::resource('event', 'EventController');

Route::get('event/{eid}/{uid}/join', 'EventController@join');

Route::get('event/{eid}/{uid}/interested', 'EventController@interested');

// account pages

Route::resource('account', 'AccountController');

Route::resource('account_phone', 'PhoneController');

Route::resource('account_dob', 'DobController');

// test page
Route::get('/test', function(){
    return view('test');
});
Route::get('/create', 'EventController@create');

Route::post('/create', 'EventController@store');

Route::resource('queries', 'QueryController');
