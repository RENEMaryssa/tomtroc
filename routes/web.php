<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

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

// ✅ Déclaration correcte des routes livres
Route::resource('books', BookController::class);

// Messagerie
Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
Route::get('/messages/{user}', [MessageController::class, 'show'])->name('messages.show');
Route::post('/messages/{user}', [MessageController::class, 'store'])->name('messages.store');


require __DIR__.'/auth.php';
