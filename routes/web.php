<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HobikuController;

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

Route::get('/profilee',[ProfileController::class, 'tampil']);
Route::get('/profilee/edit',[ProfileController::class, 'edit']);
Route::get('/profilee/tambah',[ProfileController::class, 'tambah']);
Route::get('/profilee/hapus',[ProfileController::class, 'hapus']);
Route::get('/hobiku', [HobikuController::class, 'index']);
