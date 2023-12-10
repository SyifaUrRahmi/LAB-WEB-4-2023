<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\DashboardController;

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

// USER ROUTE
Route::get('/', [HomeController::class, 'index']);
Route::get('contact', [HomeController::class, 'contact']);
Route::get('detail', [HomeController::class, 'detail']);
Route::get('cars', [HomeController::class, 'get_all_cars']);

// ADMIN ROUTE
Route::get('admin/dashboard', [DashboardController::class, 'index']);
Route::resource('admin/cars', CarController::class);
Route::resource('admin/drivers', CarController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');