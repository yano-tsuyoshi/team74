<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
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
Route::get('/', function () {
    return view('teams/index');
});

<<<<<<< HEAD
//管理者登録画面
Route::get('/top',[StaffController::class,'top'])->name('top');

Route::get('/register',[StaffController::class,'register'])->name('register');
Route::post('/staffRegister',[StaffController::class,'staffRegister']);

//管理者編集画面
Route::get('/edit/{id}',[StaffController::class,'edit']);
Route::post('/staffEdit',[StaffController::class,'staffEdit']);

//管理者削除画面
Route::get('/staffDelete/{id}',[StaffController::class,'staffDelete']);

=======
// 予約登録画面
Route::get('user', [ReserveController::class, 'show']);
// Route::get('staff', [ReserveController::class, 'selectStaff']);
// Route::get('course', [ReserveController::class, 'selectCourse']);
Route::get('reserve', [ReserveController::class, 'index']);
Route::post('reserve', [ReserveController::class, 'store']);

// 予約一覧画面
// Route::get('reserve', [ReserveController::class, 'list']);

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
>>>>>>> 18c8debdcbf71cbc44b58fd6d8fb159eb6f7083e
