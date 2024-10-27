<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\assessorDasboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'HomePage',
    ]);
});

Route::resource('adminDashboard', adminDashboardController::class)->middleware('role:admin');
Route::resource('assessorDashboard', assessorDasboardController::class)->middleware('role:assessor');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('role:user')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
