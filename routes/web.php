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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// 案内画面
Route::get('/guide', [App\Http\Controllers\HomeController::class, 'guide'])->name('guide');
// 施術コース
Route::get('/course', [App\Http\Controllers\HomeController::class, 'course'])->name('course');
// 料金
Route::get('/price', [App\Http\Controllers\HomeController::class, 'price'])->name('price');