<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/top',[StaffController::class,'top'])->name('top');

Route::get('/register',[StaffController::class,'register'])->name('register');
Route::post('/staffRegister',[StaffController::class,'staffRegister']);

Route::get('/edit/{id}',[StaffController::class,'edit']);
Route::post('/staffEdit',[StaffController::class,'staffEdit']);

Route::get('/staffDelete/{id}',[StaffController::class,'staffDelete']);

