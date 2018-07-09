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
});


Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('track', function () {
    return view('track');
})->name('track');


Route::get('dash', function () {
    return view('Dashboard/index');
})->name('dash');


Route::get('addshipment', function () {
    return view('Dashboard/addshipment');
})->name('addshipment');



Route::get('viewshipment', function () {
    return view('Dashboard/viewshipment');
})->name('viewshipment');

Route::get('addactivity', function () {
    return view('Dashboard/addactivity');
})->name('addactivity');

Route::get('viewactivity', function () {
    return view('Dashboard/viewactivity');
})->name('viewactivity');


Route::post('storeShipment','shipmentsController@addShipment');



Route::get('displayShipment','shipmentsController@viewShipmentList');

Route::get('getTrackinfo/{id}','shipmentsController@trackGoods');