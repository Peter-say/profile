<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Dashboards\Admin\ProfileController;
use App\Http\Controllers\Dashboards\Admin\UsersController;
use App\Http\Controllers\Dashboards\Admin\PostController;
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
 
// Route::get('/', function () {
//    return view('welcome');
// });



Auth::routes();

Route::prefix("admin")->as("admin.")->middleware(["verified"  , "admin"])->group(function () {
   Route::get('/dashboard', [App\Http\Controllers\Dashboards\Admin\IndexController::class, 'admin'])->name('dashboard');
   Route::get('/search', [App\Http\Controllers\Dashboards\Admin\IndexController::class, 'search'])->name('users.search');
   Route::resource('/post' , PostController::class);
   Route::resource('/users' , UsersController::class);
   Route::resource('/profile' , ProfileController::class);
 });

 Route::prefix("user")->as("user.")->middleware(["verified"])->group(function () {
   Route::get('/dashboard', [App\Http\Controllers\Dashboards\Users\IndexController::class, 'index'])->name('dashboard');

 });



 Route::get('/', [App\Http\Controllers\WelcomeController::class, 'welcome'])->name('/');
 Route::get('/post/{$post}/show', [App\Http\Controllers\WelcomeController::class, 'singlePost'])->name('post.show');
 Route::get('/blog', [App\Http\Controllers\WelcomeController::class, 'blog'])->name('blog');
 