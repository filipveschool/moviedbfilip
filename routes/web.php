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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/movie', function () {
    return view('movies.showSingleMovie');
});

Route::resource('movies', 'MovieController');
Route::resource('shows', 'ShowController');

Route::get('movieshow', 'MovieController@showmovie');

//Route::get('ajaxRequest', 'HomeController@ajaxRequest');

//Route::post('ajaxRequest', 'HomeController@ajaxRequestPost');


//media

//Pages routes
Route::resource('pages', 'PageController')->except('index', 'update');