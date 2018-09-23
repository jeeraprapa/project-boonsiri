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
    return view('index');
})->name('http::index');

Route::get('/booking-route', function () {
    return view('booking/index');
})->name('http::booking-route');

Route::get('/booking-transfer', function () {
    return view('booking/transfer/index');
})->name('http::booking-transfer');
