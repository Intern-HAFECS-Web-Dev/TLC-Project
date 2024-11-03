<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\assessorDasboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\provinsiController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userDashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'HomePage',
    ]);
});

Route::resource('assessorDashboard', assessorDasboardController::class)->middleware('role:asesor');
Route::resource('userDashboard', userDashboardController::class)->middleware('role:user');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware('role:user')->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:admin')->group(function () {
    Route::resource('adminDashboard', adminDashboardController::class);
    Route::resource('users', userController::class);

    Route::get('/dashboardAdmin', [adminDashboardController::class, 'adminDashboard'])->name('adminDashboard');
});

Route::get('/deleteUsers/{id}', [userController::class, 'destroy'])->name('users.destroyy');


// Route::get('/regencies/{province_id}', [WilayahController::class, 'getRegencies']);
// Route::get('/districts/{regency_id}', [WilayahController::class, 'getDistricts']);
// Route::get('/villages/{district_id}', [WilayahController::class, 'getVillages']);

Route::get('/regencies/{provinceId}', [provinsiController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [provinsiController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [provinsiController::class, 'getVillages']);


Route::get('/locations/{id}', [RegisteredUserController::class, 'shows'])->name('tampilkan.provinsi');

require __DIR__.'/auth.php';
