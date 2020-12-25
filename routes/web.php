<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('welcome.index');

Route::get('about-smart', [App\Http\Controllers\AboutController::class, 'index'])->name('about-smart.index');

Route::get('contact', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

Route::get('login', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');

Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
