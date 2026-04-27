<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('create');
});

Route::resource('mahasiswa', MahasiswaController::class);

