<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelSettingsController;
use App\Http\Controllers\Admin\QuestionController;
use App\Http\Controllers\adminAsesorController;
use App\Http\Controllers\adminDashboardController;
use App\Http\Controllers\Asesi2\UserAnsweerController;
use App\Http\Controllers\Asesi\AsesiAnswerController;
use App\Http\Controllers\Asesi\AsesiController;
use App\Http\Controllers\Asesi\ScoreController;
use App\Http\Controllers\assessorDasboardController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\provinsiController;
use App\Http\Controllers\sertifikasiUserController;
use App\Http\Controllers\settings\SettingController;
use App\Http\Controllers\testingController;
use App\Http\Controllers\TransactionController;
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
});

// return view('welcome');

Route::resource('assessorDashboard', assessorDasboardController::class)->middleware('role:asesor');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['role:user', 'user_last_seen'])->group(function () {
    Route::resource('userDashboard', userDashboardController::class);
    Route::get('/dashboardUser', [userDashboardController::class, 'userDashboard'])->name('userDashboard');
    // Route::get('/sertifikasi', [sertifikasiUserController::class, 'index'])->name('sertifikasi.index');
    Route::get('/sertifikasi', [userDashboardController::class, 'sertifikasiIndex'])->name('sertifikasi.index');
    Route::get('/transaksi', [userDashboardController::class, 'transaksiIndex'])->name('transaksi.index');
    Route::get('/userProfile', [userDashboardController::class, 'profileIndex'])->name('userProfile.index');
    Route::get('/myCertification', [userDashboardController::class, 'myCertificationIndex'])->name('myCertification.index');
    Route::get('/kategoriLevel', [userDashboardController::class, 'kategoriLevelIndex'])->name('kategoriLevel.index');
    Route::post('/updateMyProfile', [userDashboardController::class, 'myProfileStore'])->name('myProfile.update');

    // soal
    Route::get('/asesi/soal/{categori}/question', [AsesiController::class, 'index'])->name('soal.index');

    // send answer
    Route::post('/asesi/soal/question/answer', [AsesiAnswerController::class, 'store'])->name('soal.answer.store');

    // get soal tes 2
    Route::get('/asesi/soal/tes2/{categori}/question', [UserAnsweerController::class, 'index'])->name('soal.tes2');

    // cek nilai
    Route::get('/nilai',[ScoreController::class, 'getAllCategoriesScores'] )->name('cek.nilai.index');
});

// route admin

Route::middleware('role:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('dashboard', adminDashboardController::class);

    Route::resource('users', userController::class);


    Route::resource('asesor', adminAsesorController::class);

    Route::get('showAsesi/{id}', [userController::class, 'show'])->name('asesi-show');

    Route::get('/deleteUsers/{id}', [userController::class, 'destroy'])->name('users.destroy');
    Route::get('/deleteAllUsers', [usersController::class, 'destroyAll'])->name('deleteAllUsers');
    Route::get('/testing', [usersController::class, 'testing'])->name('testing');

    Route::post('/editProfileImage', [ProfileController::class, 'editImg'])->name('profile.editImg');
    Route::get('/download-asesi-img/{id}', [userController::class, 'downloadImage'])->name('users.DownloadImg');

    // route soal asesi
    Route::resource('categori', CategoryController::class);
    Route::resource('categori.questions', QuestionController::class);

    // route transaction
    Route::resource('payment/transaksi', TransactionController::class);

    // Route::resource('settingss', SettingController::class);
    Route::resource('settings', LevelSettingsController::class);

    Route::post('settings/autoGenerate', [LevelSettingsController::class, 'autoGenerate'])->name('settings.autoGenerate');

});

Route::get('/regencies/{provinceId}', [provinsiController::class, 'getRegencies']);
Route::get('/districts/{regencyId}', [provinsiController::class, 'getDistricts']);
Route::get('/villages/{districtId}', [provinsiController::class, 'getVillages']);

Route::get('/locations/{id}', [RegisteredUserController::class, 'shows'])->name('tampilkan.provinsi');

require __DIR__ . '/auth.php';