<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReserveController;

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
Route::get('/top', function () {
    return view('teams/index');
})->name('top');


// 予約登録画面
Route::get('user', [ReserveController::class, 'show']);
// Route::get('staff', [ReserveController::class, 'selectStaff']);
// Route::get('course', [ReserveController::class, 'selectCourse']);
Route::get('reserve', [ReserveController::class, 'index']);
Route::post('reserve', [ReserveController::class, 'store']);

// 予約一覧画面
// Route::get('reserve', [ReserveController::class, 'list']);



// 案内画面
Route::get('/guide', [App\Http\Controllers\HomeController::class, 'guide'])->name('guide');
// 施術コース
Route::get('/course', [App\Http\Controllers\HomeController::class, 'course'])->name('course');
// 料金
Route::get('/price', [App\Http\Controllers\HomeController::class, 'price'])->name('price');

//以下マルチログイン
Auth::routes();
// ユーザー側 一般画面
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 管理者ログイン画面
Route::get('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'showAdminLoginForm']);
// 管理者登録画面
Route::get('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'showAdminRegisterForm']);
Route::get('/register/home',[App\Http\Controllers\Auth\RegisterController::class, 'adminHome']);

Route::post('/login/admin', [App\Http\Controllers\Auth\LoginController::class, 'adminLogin']);
Route::post('/register/admin', [App\Http\Controllers\Auth\RegisterController::class, 'registerAdmin']);
Route::post('/register_validator', [App\Http\Controllers\Auth\RegisterController::class, 'registerValidator']);

Route::view('/admin', 'admin')->middleware('auth:admin')->name('admin-home');
