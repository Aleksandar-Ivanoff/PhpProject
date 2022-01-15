<?php

use App\Http\Controllers\AuthenticationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

// Route::get('/', function () {
//     return view('index.index');
// });

Route::get('/',[IndexController::class, 'index'])->name('index');
Route::get('/register',[AuthenticationController::class,'register'])->name('register');
Route::post('/register',[AuthenticationController::class,'store']);
Route::get('/login',[AuthenticationController::class, 'login'])->name('login');
Route::post('/login',[AuthenticationController::class,'signInUser']);
Route::get('/logout',[AuthenticationController::class,'logout']);


