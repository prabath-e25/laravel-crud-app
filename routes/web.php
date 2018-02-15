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

Route::get('/login', function () {
    return view('welcome');
});

Route::get('/apartments/create', 'ApartmentsController@addApartments');
Route::get('/apartments', 'ApartmentsController@getApartments');
Route::get('/apartment/{id}', 'ApartmentsController@showApartment');

Route::post('/apartments/create', 'ApartmentsController@store');
