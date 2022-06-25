<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LowonganController;
use App\Http\Controllers\RegisterController;

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

Route::get('/', [JobsController::class, 'index']);
Route::get('/category-job', [JobsController::class, 'categoryJob']);

//register route
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// login route
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);


// Route admin/mitra panel
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

// Route input mitra
Route::get('/dashboard/input-mitra', [LowonganController::class, 'createMitra'])->name('dashboard.mitra');
Route::post('/dashboard/input-mitra', [LowonganController::class, 'inputMitra'])->name('dashboard.input.mitra');


// Route input lowongan, lowongan keahlian dan keahlian
Route::get('/dashboard/input-lowongan', [LowonganController::class, 'createLowongan'])->name('dashboard.lowongan');
Route::post('/dashboard/input-lowongan', [LowonganController::class, 'inputLowongan'])->name('dashboard.input.lowongan');
