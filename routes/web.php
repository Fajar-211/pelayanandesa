<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuratPengantarController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/lojin', function () {
    return view("lojin", ["nama" => "fajar"]);
});
Route::get('/user', function () {
    return view("user",["nama" => "pengguna"]);
});
Route::get('/dashboard-admin', function(){
    return view("dashboard-admin",["nama" => 'pengguna']);
});
Route::post('/surat-pengantar', [SuratPengantarController::class, 'store'])->name('surat-pengantar.store');
require __DIR__.'/auth.php';
