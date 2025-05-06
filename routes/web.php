<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('contact', function () {
    return 'Contact us';
});

Route::get('about', function () {
    return 'About us';
});