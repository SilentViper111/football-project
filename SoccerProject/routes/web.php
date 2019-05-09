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
// Redirect funkcije
Route::get('/', 'MainController@index');
Route::get('/igralci', 'MainController@igralci');
Route::get('/tekme', 'MainController@tekme');
Route::get('/stadioni', 'MainController@stadioni');
Route::get('/trenerji', 'MainController@trenerji');
Route::get('/lige', 'MainController@lige');
Route::get('/drzave', 'MainController@drzave');
// Vstavljanje
Route::post('/ekipe/insert', 'InsertController@ekipe');
Route::post('/igralci/insert', 'InsertController@igralci');
Route::post('/tekme/insert', 'InsertController@tekme');
Route::post('/stadioni/insert', 'InsertController@stadioni');
Route::post('/trenerji/insert', 'InsertController@trenerji');
Route::post('/lige/insert', 'InsertController@lige');
Route::post('/drzave/insert', 'InsertController@drzave');
// Brisanje
Route::get('/delete/ekipe/{id}', 'DeleteController@ekipe');
Route::get('/delete/igralci/{id}', 'DeleteController@igralci');
Route::get('/delete/tekme/{id}', 'DeleteController@tekme');
Route::get('/delete/stadioni/{id}', 'DeleteController@stadioni');
Route::get('/delete/trenerji/{id}', 'DeleteController@trenerji');
Route::get('/delete/lige/{id}', 'DeleteController@lige');
Route::get('/delete/drzave/{id}', 'DeleteController@drzave');
// Urejanje
Route::get('/edit/ekipe/{id}', 'EditController@ekipe');
Route::get('/edit/igralci/{id}', 'EditController@igralci');
Route::get('/edit/tekme/{id}', 'EditController@tekme');
Route::get('/edit/stadioni/{id}', 'EditController@stadioni');
Route::get('/edit/trenerji/{id}', 'EditController@trenerji');
Route::get('/edit/lige/{id}', 'EditController@lige');
Route::get('/edit/drzave/{id}', 'EditController@drzave');
// Urejeanje vpis
Route::post('/e/ekipe/{id}', 'EditController@ekipeE');
Route::post('/e/igralci/{id}', 'EditController@igralciE');
Route::post('/e/tekme/{id}', 'EditController@tekmeE');
Route::post('/e/stadioni/{id}', 'EditController@stadioniE');
Route::post('/e/trenerji/{id}', 'EditController@trenerjiE');
Route::post('/e/lige/{id}', 'EditController@ligeE');
Route::post('/e/drzave/{id}', 'EditController@drzaveE');

//Avtentikacija in izpis
Auth::routes();
Route::get('/logout', 'HomeController@logout');
