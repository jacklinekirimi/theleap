<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/', 'PageController@home')->name('home');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/contact', 'PageController@contact')->name('contact');
 });
