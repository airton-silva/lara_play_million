<?php

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

Route::get('/', function () {
    Route::get('/', [UserController::class, 'index'])->name('sign');
})->middleware(['auth'])->name('/');


Route::get('/home', [GamerController::class, 'index'])->middleware(['auth'])->name('home');





require __DIR__.'/auth.php';
