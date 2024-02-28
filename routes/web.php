<?php

use App\Http\Controllers\AbsensiMahasiswaController;
use App\Http\Controllers\PertemuanController;
use App\Http\Controllers\AjaranController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('ajaran', AjaranController::class);
Route::resource('dosen', DosenController::class);
Route::resource('mahasiswa', MahasiswaController::class);
Route::resource('pertemuan', PertemuanController::class);
Route::resource('absensi-mahasiswa', AbsensiMahasiswaController::class);
