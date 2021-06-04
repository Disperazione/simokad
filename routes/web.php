<?php

use App\Http\Controllers\Admin\DataDashboard as AdminDash;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\TableGuruController as AdminControllerG;
use App\Http\Controllers\Admin\TableSiswaController as AdminControllerS;
use App\Http\Controllers\AuthLogin;
use App\Http\Controllers\AuthLogout;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('auth.login');
})->name('login')->middleware(['guest:admin', 'guest:guru', 'guest:siswa']);

Route::post('/', AuthLogin::class);
Route::post('/logout', AuthLogout::class)->name('logout');
Route::middleware('auth:admin')->name('admin.')->prefix('admin')->group(function () {
    Route::get('/dashboard', AdminDash::class)->name('dashboard');
    Route::get('/profile', ProfileController::class)->name('profile');
    Route::get('/setting', SettingController::class)->name('setting');

    Route::resources([
        '/guru' => AdminControllerG::class,
        '/siswa' => AdminControllerS::class,
    ]);
});

Route::middleware('auth:guru')->name('guru.')->prefix('guru')->group(function () {
    Route::get('/dashboard', AdminDash::class)->name('dashboard');
});
