<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Kavinda\Contact\Http\Controllers\ContactController;



// Route::group(['namespace' => 'Kavinda\Contact\Http\Controllers'], function () {

//     Route::get('contact', 'ContactController@index')->name('contact');

//     Route::post('store', 'ContactController@store');
// });

Route::get('/contact','Kavinda\Contact\Http\Controllers\ContactController@index')->name('contact');

Route::post('/store','Kavinda\Contact\Http\Controllers\ContactController@store');
