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
Route::get('user', [ReserveController::class, 'userShow']);

Route::get('reserve', [ReserveController::class, 'reservePageShow']);
Route::post('reserve', [ReserveController::class, 'reserveDataStore']);

// ユーザー用予約表示画面
Route::get('reserve_list', [ReserveListController::class, 'userDataShow']);
Route::get('reserve_list', [ReserveListController::class, 'reserveDataShow']);