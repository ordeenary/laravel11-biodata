<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
});

Route::get('/hobi', function () {
    return view('hobi');
});

Route::get('/profile', function () {
    return view('profile');
});
