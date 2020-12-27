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

//classrooms
Route::get('addclassroom', [App\Http\Controllers\ClassroomController::class, 'create'])->name('classroom.create');
Route::post('addnewclassroom', [App\Http\Controllers\ClassroomController::class, 'store'])->name('classroom.store');
Route::get('myclassrooms', [App\Http\Controllers\ClassroomController::class, 'index'])->name('classroom.index');
Route::get('classroom/{id}', [App\Http\Controllers\ClassroomController::class, 'show'])->name('classroom.show');
Route::get('editclassroom/{id}', [App\Http\Controllers\ClassroomController::class, 'edit'])->name('classroom.edit');
Route::post('updateclassroom/{id}', [App\Http\Controllers\ClassroomController::class, 'update'])->name('classroom.update');

//courses
Route::get('addcourse', [App\Http\Controllers\CourseController::class, 'create'])->name('course.create');
Route::post('addnewcourse', [App\Http\Controllers\CourseController::class, 'store'])->name('course.store');
Route::get('mycourses', [App\Http\Controllers\CourseController::class, 'index'])->name('course.index');
Route::get('course/{id}', [App\Http\Controllers\CourseController::class, 'show'])->name('course.show');
Route::get('editcourse/{id}', [App\Http\Controllers\CourseController::class, 'edit'])->name('course.edit');
Route::post('updatecourse/{id}', [App\Http\Controllers\CourseController::class, 'update'])->name('course.update');


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
