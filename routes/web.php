<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, "index"])->name("home.index");
Route::get('/login', [LoginController::class, "index"])->name("login.index");
Route::post('/login', [LoginController::class, "post"])->name("login.post");
Route::get('/register', [RegisterController::class, "index"])->name("register.index");
Route::post('/register', [RegisterController::class, "store"])->name("register.post");
Route::get('/user', [UserController::class, "index"])->name("user.index");

Route::prefix("profile")->group(function () {
    Route::get('/', [UserController::class, "profile"])->name("profile.detail");
    Route::get('/edit', [UserController::class, "form"])->name("profile.edit");
    Route::put('/edit', [UserController::class, "update"])->name("profile.update");
    Route::get('/out', [LoginController::class, "out"])->name("login.out");
});
