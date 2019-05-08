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

Route::get('/', 'MainController@index');
Route::get('/igralci', 'MainController@igralci');
Route::get('/tekme', 'MainController@tekme');
Route::get('/stadioni', 'MainController@stadioni');
Route::get('/trenerji', 'MainController@trenerji');
Route::get('/lige', 'MainController@lige');
Route::get('/drzave', 'MainController@drzave');

Auth::routes();
Route::get('/logout', 'HomeController@logout');
