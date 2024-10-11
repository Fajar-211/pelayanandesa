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
use App\Imports\KasWargaImport;
use Spatie\Permission\Models\Role;

Route::get('/', function () {
    return view('/auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'verified', 'role:warga'])->group(function () {
    Route::get('/user/', [UserController::class, 'index'])->name('user');
    Route::get('/user/surat-pengantar', [SuratPengantarController::class, 'index'])->name('user.surat');
    Route::get('/user/wajib-lapors', [WajibLaporController::class, 'index'])->name('user.wajib_lapors');
    Route::get('/user/kas-warga', [KasWargaController::class, 'index'])->name('user.kas_warga');
    Route::get('/user/info-profil', [InfoProfilController::class, 'index'])->name('profile.info');
    Route::get('/user/edit-profil', [EditProfilController::class, 'index'])->name('profile.edit');
    Route::post('/user/surat-pengantar', [SuratPengantarController::class, 'store'])->name('surat-pengantar.store');
    Route::post('/wajib_lapors', [WajibLaporController::class, 'store'])->name('wajib_lapors.store');
    Route::put('/user/edit-profil', [EditProfilController::class, 'edit'])->name('profile.update');
});

Route::middleware(['auth', 'verified', 'role:admin'])->group(function () {
    Route::get('/admin/', [AdminController::class, 'view'])->name('admin.surat');
    Route::get('/admin/surat-pengantar', [AdminSuratPengantarController::class, 'view'])->name('admin.surat');
    Route::get('/admin/wajib-lapor', [AdminWajibLaporController::class, 'view'])->name('admin.wajib_lapor');
    Route::get('/admin/data-warga', [AdminDataWargaController::class, 'view'])->name('admin.data_warga');
    Route::get('/admin/kas-warga', [AdminKasWargaController::class, 'view'])->name('admin.kas_warga');
    Route::get('/admin/pemberitahuan', [AdminNotifikasiController::class, 'view'])->name('admin.notifikasi');
    Route::get('/admin/info-profile', [AdminInfoProfileController::class, 'view'])->name('admin.info_profile');
    Route::post('/data-warga/import', [ImportController::class, 'dataWargaImport'])->name('import.datawarga');
    Route::post('/kas_warga/import', [KasWargaImportController::class, 'KasWarga'])->name('import.kas_warga');
});

Route::post('/user/surat-pengantar', [SuratPengantarController::class, 'store'])->name('surat-pengantar.store');
Route::get('surat-pengantar/create', [SuratPengantarController::class, 'create'])->name('surat-pengantar.create');
require __DIR__.'/auth.php';
Route::post('/wajib_lapors', [WajibLaporController::class, 'store'])->name('wajib_lapors.store')->middleware('auth');
Route::get('wajib_lapor/create', [WajibLaporController::class, 'create'])->name('wajib_lapors.create');

Route::post('/notif/store', [NotifikasiController::class, 'store'])->name('notif.store');
Route::get('/user/info-profile', [EditProfilController::class, 'showProfile'])->name('profile.show');

// Route::put('/user/edit-profil', [EditProfilController::class, 'edit'])->name('profile.update');
// Route::post('/data-warga/import', [ImportController::class, 'dataWargaImport'])->name('import.datawarga');