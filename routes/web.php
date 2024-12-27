<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RequestingController;
use App\Http\Controllers\UserController;
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
    return view('offer.index');
})->name('home')->middleware('auth');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');


Route::post('/register', [UserController::class, 'register'])->name('register');
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

Route::post('/request', [RequestingController::class, 'store'])->name('request.store')->middleware('auth');

Route::get('/show', [RequestingController::class, 'index'])->name('show');

Route::get('/admin', [AdminController::class, 'index'])->name('admin');

Route::patch('options/{option}/update', [AdminController::class, 'update'])->name('options.update')->middleware('auth');

