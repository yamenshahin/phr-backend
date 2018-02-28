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

Route::get('/about', function() {
    return view('about');
});
Route::get('/documentation', function() {
    return view('documentation');
});
//API
Route::get('/api/users', function() {
	$users = App\User::all();
    return $users;
});
Route::get('/api/measurements', function() {
	$measurements = App\Measurement::all();
    return $measurements;
});
Route::get('/api/measurements', function() {
	$measurements = App\Measurement::all();
    return $measurements;
});
Route::get('/api/measurement_metas', function() {
	$measurement_meta = App\MeasurementMeta::all();
    return $measurement_meta;
});
Route::get('/api/units', function() {
	$units = App\Unit::all();
    return $units;
});