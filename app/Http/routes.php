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
use Illuminate\Http\Request;

/*
Landing page
*/
Route::get('/', function() {
  return 'test';
});

/*
States routes
*/
Route::get('/states','StateController@index');
Route::post('/states','StateController@create');
Route::get('/states/{id}','StateController@show');
Route::put('/states/{id}','StateController@update');
Route::delete('/states{id}','StateController@destroy');
/*
Countries routes
*/
Route::get('/countries','CountryController@index');

/*
Fruits routes
*/
Route::get('/fruits','FruitController@index');
