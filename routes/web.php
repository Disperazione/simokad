<?php

use App\Http\Controllers\Admin\DataDashboard as AdminDash;
use App\Http\Controllers\Admin\TableGuru as AdminTableG;
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
})->name('login');

Route::post('/', AuthLogin::class);
Route::post('/logout', AuthLogout::class)->name('logout');
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/dashboard', AdminDash::class)->name('dashboard');

    Route::get('/guru', AdminTableG::class)->name('guru');
});
