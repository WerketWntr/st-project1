<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

//Notes

Route::get('/notes', [\App\Http\Controllers\NoteController::class, 'index'])->name('note.index');
Route::get('/notes/create', [\App\Http\Controllers\NoteController::class, 'create'])->name('note.create');
Route::post('/notes', [\App\Http\Controllers\NoteController::class, 'store'])->name('note.store');
Route::get('/notes/{note}', [\App\Http\Controllers\NoteController::class, 'show'])->name('note.show');
Route::get('/notes/{note}/edit', [\App\Http\Controllers\NoteController::class, 'edit'])->name('note.edit');
Route::put('/notes/{note}', [\App\Http\Controllers\NoteController::class, 'update'])->name('note.update');
Route::delete('/notes/{note}', [\App\Http\Controllers\NoteController::class, 'destroy'])->name('note.destroy');

require __DIR__.'/auth.php';
