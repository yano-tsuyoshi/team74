<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveListController;
use App\Http\Controllers\StaffController;

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

// ホーム画面
Route::get('/', function () {
    return view('teams/index');
});

// 予約登録画面
Route::get('reserve', [ReserveController::class, 'reservePageShow']);
Route::post('reserve', [ReserveController::class, 'reserveDataStore']);

// ユーザー用予約表示画面
Route::get('reserve_show', [ReserveListController::class, 'userDataShow']);
Route::get('reserve_show', [ReserveListController::class, 'reserveShow']);
Route::get('reserve_show', [ReserveListController::class, 'reserveIndex']);

//以下マルチログイン
Auth::routes();
// ユーザー側　一般画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 管理者ログイン画面
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
// 管理者登録画面
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin'])->name('admin-register');

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');