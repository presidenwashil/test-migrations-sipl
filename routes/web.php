<?php

use App\Http\Livewire\Pages\Jadwal;
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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('users', 'users')
    ->middleware(['auth', 'verified'])
    ->name('users');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('jadwal', App\Livewire\Pages\Jadwal::class)
    ->middleware(['auth'])
    ->name('jadwal');

Route::get('kelola-pertemuan/{kelompok}', App\Livewire\Pages\KelolaPertemuan::class)
    ->middleware(['auth'])
    ->name('kelola-pertemuan');


Route::resource('kelompok', App\Http\Controllers\KelompokController::class);

Route::prefix('kelompok/{kelompok}')->group(function () {
    Route::resource('pertemuan', App\Http\Controllers\PertemuanController::class);

    Route::prefix('pertemuan/{pertemuan}')->group(function () {
        Route::resource('absensi-asisten', App\Http\Controllers\AbsensiAsistenController::class);
        Route::resource('absensi-mahasiswa', App\Http\Controllers\AbsensiMahasiswaController::class);
    });
});


require __DIR__.'/auth.php';
