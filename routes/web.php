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


// Base routes for the public
Route::get('/', 'PublicController@getHome');
Route::get('/trucks', 'PublicController@getTrucks');
Route::get('/trucks/{id}', 'PublicController@getTruckDetails');
Route::get('/map', 'PublicController@getMap');

Route::get('/api/coordinates', 'PublicController@getJsonCoordinates');

Auth::routes();
// Admin routes
Route::get('/admin', 'HomeController@index')->name('home');
Route::get('/admin/update/truckinfo', 'HomeController@getTruckForm');
Route::get('/admin/update/menu', 'HomeController@getMenuForm');

// validating routes
Route::post('/admin/truckFormValidation', 'HomeController@truckFormValidation');
Route::any('/admin/menuFormValidation', 'HomeController@menuFormValidation');
Route::post('/admin/validateEditTruckFormValidation', 'HomeController@validateEditTruckFormValidation');
