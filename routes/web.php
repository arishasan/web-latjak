<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('/do_login', [AuthController::class, 'login'])->name('exec-login');

// Route::group(['middleware' => 'auth'], function(){

	// Route::get('logout', [AuthController::class, 'logout'])->name('logout');
	Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');

    Route::get('devices', [AdminController::class, 'devices'])->name('devices-data');
    Route::get('users', [AdminController::class, 'users'])->name('users-data');
	
// });