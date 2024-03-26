<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TaxController;
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('tax', [TaxController::class, 'taxview'])->name('tax');
Route::post('calculation', [TaxController::class, 'calculation'])->name('calculation');
Route::get('order', [TaxController::class, 'order'])->name('order');
Route::get('product', [TaxController::class, 'product'])->name('product');
require __DIR__.'/auth.php';
