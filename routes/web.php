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
Route::get('/latihan', function () {
    return view('latihan');
});

Route::get('/profilee',[ProfileController::class, 'tampil']);
Route::get('/edit',[ProfileController::class, 'edit']);
Route::get('/tambah',[ProfileController::class, 'tambah']);
Route::get('/hapus',[ProfileController::class, 'hapus']);
Route::get('/lihat',[ProfileController::class, 'lihat']);
Route::get('/hobiku', [HobikuController::class, 'index']);
