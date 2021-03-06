<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\ReserveListController;
use App\Http\Controllers\CourseController;

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

//管理者登録画面
Route::get('staffs/top',[StaffController::class,'top'])->name('top');

Route::get('staffs/register',[StaffController::class,'register'])->name('register');
Route::post('/staffRegister',[StaffController::class,'staffRegister']);

//管理者編集画面
Route::get('staffs/edit/{id}',[StaffController::class,'edit']);
Route::post('/staffEdit',[StaffController::class,'staffEdit']);

//管理者削除画面
Route::get('/staffDelete/{id}',[StaffController::class,'staffDelete']);

//コース登録
Route::get('courses/course_top',[CourseController::class,'top'])->name('top');

Route::get('courses/register',[CourseController::class,'register'])->name('register');
Route::post('/courseRegister',[CourseController::class,'courseRegister']);

//コース編集画面
Route::get('courses/edit/{id}',[CourseController::class,'edit']);
Route::post('/courseEdit',[CourseController::class,'courseEdit']);

//コース削除画面
Route::get('/courseDelete/{id}',[CourseController::class,'courseDelete']);

//予約一覧
Route::get('reserves/list_top',[ReserveController::class,'top'])->name('top');

// 予約登録画面（西田）
Route::get('reserve', [ReserveController::class, 'reservePageShow']);
Route::post('reserve', [ReserveController::class, 'reserveDataStore']);

// 案内画面
Route::get('/guide', [App\Http\Controllers\HomeController::class, 'guide'])->name('guide');
// 施術コース
Route::get('/course', [App\Http\Controllers\HomeController::class, 'course'])->name('course');
// 料金
Route::get('/price', [App\Http\Controllers\HomeController::class, 'price'])->name('price');







// 予約登録画面
//Route::get('user', [ReserveController::class, 'show']);
// Route::get('staff', [ReserveController::class, 'selectStaff']);
// Route::get('course', [ReserveController::class, 'selectCourse']);
//Route::get('reserve', [ReserveController::class, 'index']);
//Route::post('reserve', [ReserveController::class, 'store']);

// 予約一覧画面
// Route::get('reserve', [ReserveController::class, 'list']);

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