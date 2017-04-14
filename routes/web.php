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

Route::get('/home', 'HomeController@index');

Route::get('/account', function () {
    return view('account');
});

Route::get('/events', 'EventController@browseAll');

Route::get('/events/{event}', 'EventController@eventMain');

Route::get('/create', function () {
    return view('create');
});

Route::resource('account', 'AccountController');

Route::resource('account_phone', 'PhoneController');

Route::resource('account_dob', 'DobController');

// test page
Route::get('/test', function(){
    return view('test');
});
Route::get('/create', 'EventController@create');

Route::post('/create', 'EventController@store');
