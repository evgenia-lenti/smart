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
Route::get('/contact/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contact.create');
Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');


Route::middleware('guest')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
});


Route::middleware('auth')->group(function () {
    Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');

    //Route::get('settings/profile', 'ProfileController@edit')->name('profile.edit');
    //Route::patch('settings/profile/update', 'ProfileController@update');
    //Route::get('payments', 'PaymentController@index')->name('payments.index');
    //Route::get('subscription/cancel/confirm', 'SubscriptionController@cancel')->name('subscription.cancel');
    //Route::get('subscription/reactivate/confirm', 'SubscriptionController@reactivate')->name('subscription.reactivate');
    //Route::get('subscription/courses/add', 'SubscriptionController@showAddCoursesForm');
    //Route::post('subscription/courses/add', 'SubscriptionController@addCourses');


    /*Route::get('resubscribe', 'SubscriptionController@showResubscriptionForm');
    Route::post('resubscribe', 'SubscriptionController@resubscribe')->name('subscription.resubscribe');*/

});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
