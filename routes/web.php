<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function() {
    Route::get('/home', 'PageController@home')->name('home');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::get('/products', 'PageController@products')->name('products');
    Route::get('/services', 'PageController@services')->name('services');
    Route::get('/blog', 'PageController@blog')->name('blog');
 });
