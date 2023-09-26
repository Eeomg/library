<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\BookController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\UsersController;
use App\Http\Controllers\admin\BorrowedBookController;

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

// Route::get('/admin', function () {
//     return view('admin.welcome');
// })->middleware("auth:admin");

Route::resource('/admin/books', BookController::class)->middleware('auth:admin');

Route::resource('/admin/borrowed', BorrowedBookController::class)->middleware('auth:admin');

Route::resource('/admin/students',UsersController::class)->middleware('auth:admin');

Route::resource('/admin/admins',AdminController::class)->middleware('auth:admin');

Route::get('/admin/login',[LoginController::class,'index']);

Route::post('/admin/login', [LoginController::class,'signin'])->name('admin.signin');

Route::post('/admin/logout', [LoginController::class,'signout'])->name('admin.signout');



// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
