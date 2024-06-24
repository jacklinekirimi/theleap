<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers')->group(function() {
 Route::get('/student/{marks}', 'PageController@student')->name('student');
 });
