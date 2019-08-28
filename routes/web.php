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

Route::get('sample/events', 'Sample');
Route::post('sample/events/queue', 'SampleQueueWork');
Route::post('sample/events/deleat', 'SampleDeleat');
Route::post('sample/events/log-deleat', 'SampleLogDeleat');
