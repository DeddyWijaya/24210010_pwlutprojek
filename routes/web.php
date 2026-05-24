<?php

use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KelasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
});
Route::get('/1', function () {
    return view('mahasiswa.create');
});
Route::resource('mahasiswa',MahasiswaController::class);


Route::get('/2', function () {
    return view('matakuliah.create');
});
Route::resource('matakuliah',MataKuliahController::class);


Route::get('/3', function () {
    return view('dosen.create');
});
Route::resource('dosen',DosenController::class);


Route::get('/4', function () {
    return view('jurusan.create');
});
Route::resource('jurusan',JurusanController::class);

Route::get('/5', function () {
    return view('kelas.create');
});
Route::resource('kelas',KelasController::class);