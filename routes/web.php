<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/kegiatan', function () {
    return view('kegiatan');
})->name('kegiatan');
