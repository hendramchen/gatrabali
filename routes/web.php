<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BertanyaController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PengusadaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', []);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('blogs', BlogController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('categories', CategoryController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('abouts', AboutController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('questions', QuestionController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('doctors', DoctorController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('consultations', ConsultationController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

Route::resource('user-managements', UserManagementController::class)
    ->only(['index', 'store'])
    ->middleware(['auth', 'verified']);

// Routes for Visitor
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
