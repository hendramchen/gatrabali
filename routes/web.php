<?php

use App\Http\Controllers\BertanyaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PengusadaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TentangController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('blog', BlogController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('info', InfoController::class)
    ->only(['index']);

Route::resource('pengusada', PengusadaController::class)
    ->only(['index']);

Route::resource('bertanya', BertanyaController::class)
    ->only(['index']);

Route::resource('konsultasi', KonsultasiController::class)
    ->only(['index']);

Route::resource('tentang', TentangController::class)
    ->only(['index']);

require __DIR__ . '/auth.php';
