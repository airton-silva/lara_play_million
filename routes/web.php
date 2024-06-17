<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Gamer\GamerController;
use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'index'])->name('sign');
Route::post('/auth', [LoginController::class, 'authenticate'])->name('auth');

Route::get('/home', [GamerController::class, 'index'])->name('home');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/', function () {
//     return view('welcome');
// });
