<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontpageController@show');
Route::get('/about', 'PagesController@about');
Route::get('/profile', 'PagesController@profile');
Route::get('/search', 'SearchController@search');
Route::get('/venues', 'VenuesController@index');
Route::get('/venues/{id}', 'VenuesController@show');