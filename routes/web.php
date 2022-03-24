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
Route::get('/', function () {
    return view('teams/index');
});

Route::get('home', function () {
    return view('home');
});

// 予約登録画面
Route::get('user/{id}', [ReserveController::class, 'show']);
Route::get('reserve', [ReserveController::class, 'index']);
Route::post('reserve', [ReserveController::class, 'store']);

// 予約一覧画面
Route::post('reserve', [ReserveController::class, 'list']);
