<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AreaParkirController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DataMahasiswaController;
use App\Http\Controllers\IndoorMonitoringController;
use App\Http\Controllers\LabareaController;
use App\Http\Controllers\OpenBarierController;
use App\Http\Controllers\PendingUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RekapAbsensiMahasiswaController;
use App\Http\Controllers\RekapParkirController;
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


Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index')->middleware('auth');
Route::get('/absensi', [AbsensiController::class, 'index'])->name('absensi.index');
Route::get('/lab-add', [LabareaController::class, 'create'])->name('lab.create');
Route::post('/lab-store', [LabareaController::class, 'store'])->name('lab.store');
Route::delete('/lab-delete/{labarea}', [LabareaController::class, 'destroy'])->name('labarea.destroy');

Route::get('/data-mahasiswa', [DataMahasiswaController::class, 'index'])->name('datamahasiswa.index');

Route::get('/rekap-absensi', [RekapAbsensiMahasiswaController::class, 'index'])-> name('rekapabsensi.index');

Route::get('/open-barier', [OpenBarierController::class, 'index'])->name('openbarier.index');

Route::get('/rekap-parkir', [RekapParkirController::class, 'index'])->name('rekapparkir.index');

Route::get('/area-parkir', [AreaParkirController::class, 'index'])->name('areaparkir.index');

Route::get('/pending-user', [PendingUserController::class, 'index'])->name('pendinguser.index');

Route::get('/indoor-monitoring', [IndoorMonitoringController::class, 'index'])->name('indoormonitoring.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
