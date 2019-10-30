<?php

Route::get('/', function () {
    return view('login');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', function () {
    return view('contact');
});

Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('booking/export/', 'BookingController@export');

Route::get('/booking/select_vehicle', 'BookingController@selectVehicle');
Route::post('/booking/select_vehicle', 'BookingController@postVehicle');

Route::get('/booking/select_area', 'BookingController@selectArea');
Route::post('/booking/select_area', 'BookingController@postArea');


Route::get('/booking/details', 'BookingController@selectDetails');
Route::post('/booking/details', 'BookingController@postDetails');

Route::get('/thanks', function () {
    return view('booking.thanks');
});