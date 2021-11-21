<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/post/name', [App\Http\Controllers\WelcomeController::class, 'singlePost'])->name('post.name');
