<?php

use App\Http\Controllers\Admin\EventCrudController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BookEventController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TicketsController;
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

Route::get('/',[IndexController::class, 'index'])->name('index');

//Auth Routes
Route::get('/register',[AuthenticationController::class,'register'])->name('register');
Route::post('/register',[AuthenticationController::class,'store']);
Route::get('/login',[AuthenticationController::class, 'login'])->name('login');
Route::post('/login',[AuthenticationController::class,'signInUser']);
Route::get('/logout',[AuthenticationController::class,'logout']);

//Events Routes
Route::get('/events',[EventCrudController::class,'allEvents']);
Route::get('/search',[EventCrudController::class,'search']);
Route::get('/events/{id}',[EventCrudController::class,'show'])->name('showEvent');

//Profile
Route::get('/profile',[AuthenticationController::class,'profile']);

//Booking
Route::post('/events/{event}/books',[BookEventController::class,'book'])->name('events.book');