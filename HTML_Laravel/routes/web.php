<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\UserController::class, 'home']);
Route::get('about', [App\Http\Controllers\UserController::class, 'about']);
Route::get('contact', [App\Http\Controllers\UserController::class, 'contact']);
Route::get('menu', [App\Http\Controllers\UserController::class, 'menu']);
Route::get('events', [App\Http\Controllers\UserController::class, 'events']);
Route::get('chefs', [App\Http\Controllers\UserController::class, 'chefs']);
Route::get('gallery', [App\Http\Controllers\UserController::class, 'gallery']);
Route::get('BookingTable', [App\Http\Controllers\UserController::class, 'BookingTable']);
