<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->middleware("auth");
Route::get('/profile', [HomeController::class, 'profile'])->middleware("auth");
Route::get('/borrow/{id}', [HomeController::class, 'borrow'])->middleware("auth");
Route::get('/return/{id}', [HomeController::class, 'return'])->middleware("auth");
Route::get('/settings', [HomeController::class, 'settings'])->middleware("auth");
Route::put('/update', [HomeController::class, 'update'])->middleware("auth");
