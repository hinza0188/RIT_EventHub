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

Route::get('/account', 'AccountController@show');

