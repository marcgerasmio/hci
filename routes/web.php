<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('frame-14');
});


Route::view('/frame-14', 'frame-14')->name('frame-14');
Route::view('/maintenance', 'maintenance')->name('maintenance');
Route::view('/announcement', 'announcement')->name('announcement');
Route::view('/news', 'news')->name('news');
Route::view('/message', 'message')->name('message');
Route::view('/login', 'login')->name('login');
Route::view('/signup', 'signup')->name('signup');
Route::view('/upload', 'upload')->name('upload');