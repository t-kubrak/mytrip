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

Route::get('/', function () {
    return view('index');
});

Route::get('/api/airports', 'AirportController@index');

Route::get('/api/flights', 'FlightController@index');

Route::post('/api/flights', 'FlightController@store');

Route::delete('/api/flights/{id}', 'FlightController@destroy');

Route::put('/api/trips/{id}', 'TripController@update');