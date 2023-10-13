<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [ProfileController::class, 'index'])->name('dashboard');
    Route::post('/', [AuthController::class, 'logout'])->name('logout');
});
//Route::get('/', [ProfileController::class, 'index'])->name('dashboard')->middleware('auth');
//Route::post('/', [AuthController::class, 'logout'])->name('logout');

Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'showLogin'])->name('show.login');

Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('register', [AuthController::class, 'showRegister'])->name('show.register');
