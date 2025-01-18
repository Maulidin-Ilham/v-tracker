<?php

use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Kendaraan\KendaraanController;
use App\Http\Controllers\Pemesanan\PemesananController;
use App\Http\Middleware\RoleMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.auth.login');
});


Route::middleware(['auth', RoleMiddleware::class . ':admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/kendaraan', [KendaraanController::class, 'index'])->name('admin.kendaraan');
    Route::get('/admin/kendaraan/tambah', [KendaraanController::class, 'create'])->name('admin.kendaraan.tambah');
    Route::post('admin/kendaraan', [KendaraanController::class, 'store'])->name('admin.kendaraan.store');

    Route::get('/admin/pemesanan', [PemesananController::class, 'index'])->name('admin.pemesanan');

});

Route::middleware(['auth', RoleMiddleware::class . ':approver'])->group(function () {
    Route::get('/approver/dashboard', [DashboardController::class, 'index'])->name('approver.dashboard');
});

Route::middleware(['auth', RoleMiddleware::class . ':driver'])->group(function () {
    Route::get('/driver/dashboard', [DashboardController::class, 'index'])->name('driver.dashboard');
});
