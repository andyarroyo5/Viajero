<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Blade error necesary undefined variable

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

//PageController for main pages
//Route::get('/home', 'PagesController@index');
Route::get('/planning', 'PagesController@planning');


//Trip Actions
//Route::get('/create', 'TripsController@create');

Route::resource('places','PlacesController');
Route::resource('trips','TripsController');

/*Route::group(['middleware' => ['web']], function () {
    //routes here

})*/
