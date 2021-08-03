<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
/*
|--------------------------------------------------------------------------
| Web Routes
|---------------------------------php artisan route:cach-----------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
 
Route::get('/', function () {
   return view('welcome');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile/create', [App\Http\Controllers\ProfileController::class, 'create'])->name('profile.create');
Route::post('/profile/create', [App\Http\Controllers\ProfileController::class, 'store']);
Route::get('/profile/edit', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile.edit');
Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'profile'])->name('profile');