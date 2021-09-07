<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\LandingController;
use App\Models\Partner;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LandingController::class, 'index']);

Route::prefix('admin')->group(function() {
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard.index');
    Route::get('/kerja-sama', [PartnerController::class, 'index'])->name('admin.partner.index');
    Route::get('/kerja-sama/tambah', [PartnerController::class, 'add'])->name('admin.partner.add');
    Route::get('/kerja-sama/edit/{id}', [PartnerController::class, 'edit'])->name('admin.partner.edit');
    Route::post('/kerja-sama/tambah', [PartnerController::class, 'store'])->name('admin.partner.store');
    Route::put('/kerja-sama/edit/{id}', [PartnerController::class, 'update'])->name('admin.partner.update');
    Route::delete('/kerja-sama/{id}', [PartnerController::class, 'delete'])->name('admin.partner.delete');

    Route::get('/laporan-kinerja', [ReportController::class, 'index'])->name('admin.report.index');
});

Auth::routes();