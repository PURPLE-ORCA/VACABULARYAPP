<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\VocabularyController;

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

Route::get('/vocabulary', [VocabularyController::class, 'index'])->name('vocabulary.index');

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/vocabulary', [VocabularyController::class, 'adminIndex'])->name('admin.vocabulary.index');
    Route::get('/vocabulary/create', [VocabularyController::class, 'create'])->name('admin.vocabulary.create');
    Route::post('/vocabulary', [VocabularyController::class, 'store'])->name('admin.vocabulary.store');
    Route::get('/vocabulary/{vocabulary}/edit', [VocabularyController::class, 'edit'])->name('admin.vocabulary.edit');
    Route::put('/vocabulary/{vocabulary}', [VocabularyController::class, 'update'])->name('admin.vocabulary.update');
    Route::delete('/vocabulary/{vocabulary}', [VocabularyController::class, 'destroy'])->name('admin.vocabulary.destroy');
});

require __DIR__.'/auth.php';
