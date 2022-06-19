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
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
// login route
Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Route input mitra
Route::get('/dashboard/input-mitra', [LowonganController::class, 'createMitra'])->name('dashboard.mitra');
Route::post('/dashboard/input-mitra', [LowonganController::class, 'inputMitra'])->name('dashboard.input.mitra');

//Route input bidang usaha
Route::get('/dashboard/input-bidang-usaha', [LowonganController::class, 'createBidangUsaha'])->name('dashboard.bidang');
Route::post('/dashboard/input-bidang-usaha', [LowonganController::class, 'inputBidangUsaha'])->name('dashboard.input.bidang');


// Route input sektor usaha
Route::get('/dashboard/input-sektor-usaha', [LowonganController::class, 'createSektorUsaha'])->name('dashboard.sektor');
Route::post('/dashboard/input-sektor-usaha', [LowonganController::class, 'inputSektorUsaha'])->name('dashboard.input.sektor');


// Route input lowongan, lowongan keahlian dan keahlian
Route::get('/dashboard/input-lowongan', [LowonganController::class, 'createLowongan'])->name('dashboard.lowongan');
Route::post('/dashboard/input-lowongan', [LowonganController::class, 'inputLowongan'])->name('dashboard.input.lowongan');
