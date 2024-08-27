<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    // Ambil user yang sedang logged in
    $user = User::find(Auth::id());

    if($user->hasRole('admin')) {
        return view('dashboard');
    }

    if($user->hasRole('user')) {
        return view('user');
    }

    return 'Unauthorized Role!';

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
require __DIR__.'/auth.php';
