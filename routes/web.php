<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/home', function () {
    return view ('home');
});
Route::get('/aboutme', function () {
    return view ('aboutme');
});
Route::get('/contact', function () {
    return view ('contact');
});