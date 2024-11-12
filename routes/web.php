<?php

use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\assessorDasboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\provinsiController;
use App\Http\Controllers\testingController;
use App\Http\Controllers\userController;
use App\Http\Controllers\userDashboardController;
use App\Http\Controllers\usersController;
use App\Http\Controllers\userLevelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WilayahController;

Route::get('/', function () {
    return view('welcome', [
        'title' => 'HomePage',
    ]);
})->middleware('guest');

Route::resource('assessorDashboard', assessorDasboardController::class)->middleware('role:asesor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('role:user')->group(function (){
    Route::resource('userDashboard', userDashboardController::class);
    Route::get('/dashboardUser', [userDashboardController::class, 'userDashboard'])->name('userDashboard');
});

Route::middleware('role:admin')->group(function () {
    Route::resource('adminDashboard', adminDashboardController::class);
    Route::resource('users', userController::class);

    Route::get('/dashboardAdmin', [adminDashboardController::class, 'adminDashboard'])->name('adminDashboard');
    Route::get('/deleteUsers/{id}', [userController::class, 'destroy'])->name('users.destroyy');
    Route::get('/deleteAllUsers', [usersController::class, 'destroyAll'])->name('deleteAllUsers');
    Route::get('/testing', [usersController::class, 'testing'])->name('testing');

});


Route::get('/regencies/{provinceId}', [provinsiController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [provinsiController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [provinsiController::class, 'getVillages']);

Route::get('/locations/{id}', [RegisteredUserController::class, 'shows'])->name('tampilkan.provinsi');

require __DIR__.'/auth.php';
