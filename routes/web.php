<?php

use App\Http\Controllers\AdminLotteryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;
use App\Http\Controllers\LotteryController;
use App\Models\adminLottery;

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
 

Route::get('register', [LoginRegisterController::class, 'register'])->name('register');
Route::get('login', [LoginRegisterController::class, 'login'])->name('login');
Route::post('store', [LoginRegisterController::class, 'store'])->name('store');
Route::post('authenticate', [LoginRegisterController::class, 'authenticate'])->name('authenticate');
Route::post('dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
Route::post('logout', [LoginRegisterController::class, 'logout'])->name('logout');

Route::get('dashboard', [LoginRegisterController::class, 'dashboard'])->name('dashboard');
Route::post('/lottery/start', [LotteryController::class, 'start'])->name('lottery-start');
 