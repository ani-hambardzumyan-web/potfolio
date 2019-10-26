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

Route::get('/vehicle', function () {
    return view('select_vehicle');
});
Route::get('/town', function () {
    return view('town_side');
});
Route::get('/area', function () {
    return view('select_area');
});


Route::get('/thanks', function () {
    return view('thanks');
});
Auth::routes();
Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('booking/export/', 'BookingController@export');