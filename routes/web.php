<?php

use App\Http\Controllers\ImportController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\WajibLaporController;
use App\Http\Controllers\SuratPengantarController;
use App\Http\Controllers\KasWargaController;
use App\Http\Controllers\InfoProfilController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminSuratPengantarController;
use App\Http\Controllers\AdminKasWargaController;
use App\Http\Controllers\AdminDataWargaController;
use App\Http\Controllers\AdminWajibLaporController;
use App\Http\Controllers\AdminNotifikasiController;
use App\Http\Controllers\AdminInfoProfileController;
use App\Http\Controllers\AdminEditProfileController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('user');
})->middleware(['auth', 'verified'])->name('user');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/lojin', function () {
    return view("lojin", ["nama" => "fajar"]);
});

Route::get('/user', [UserController::class, 'index'])->middleware(['auth', 'verified'])->name('user');

Route::get('/user/surat-pengantar',  [SuratPengantarController::class, 'index']);
Route::get('/user/wajib-lapors',  [WajibLaporController::class, 'index']);
Route::get('/user/kas-warga',  [KasWargaController::class, 'index']);
Route::get('/user/info-profil',  [InfoProfilController::class, 'index'])->name('profile.info');
Route::get('/user/edit-profil',  [EditProfilController::class, 'index']);
Route::get('/admin',  [AdminController::class,'view']);
Route::get('/admin/surat-pengantar',  [AdminSuratPengantarController::class,'view']);
Route::get('/admin/wajib-lapor',  [AdminWajibLaporController::class,'view']);
Route::get('/admin/data-warga',  [AdminDataWargaController::class,'view']);
Route::get('/admin/kas-warga',  [AdminKasWargaController::class,'view']);
Route::get('/admin/pemberitahuan',  [AdminNotifikasiController::class,'view']);
Route::get('/admin/info-profile',  [AdminInfoProfileController::class,'view']);
Route::get('/admin/edit-profile',  [AdminEditProfileController::class,'view']);

Route::get('/template', function(){
    return view("template",["nama" => 'Pengguna']);
});
Route::get('/template1', function(){
    return view("template1",["nama" => 'Pengguna']);
});
Route::post('/user/surat-pengantar', [SuratPengantarController::class, 'store'])->name('surat-pengantar.store');
Route::get('surat-pengantar/create', [SuratPengantarController::class, 'create'])->name('surat-pengantar.create');
require __DIR__.'/auth.php';
Route::post('/wajib_lapors', [WajibLaporController::class, 'store'])->name('wajib_lapors.store')->middleware('auth');
Route::get('wajib_lapor/create', [WajibLaporController::class, 'create'])->name('wajib_lapors.create');

Route::post('/notif/store', [NotifikasiController::class, 'store'])->name('notif.store');
Route::get('/user/info-profile', [EditProfilController::class, 'showProfile'])->name('profile.show');

Route::post('/user/edit-profil', [EditProfilController::class, 'edit'])->name('profile.update');
// Route::get('/user', [NotifikasiController::class, 'index']);

Route::post('/data-warga/import', [ImportController::class, 'dataWargaImport'])->name('import.datawarga');


