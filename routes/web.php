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
    Route::get('about', [App\Http\Controllers\AboutController::class, 'index'])->name('about.index');
    Route::get('classrooms', [App\Http\Controllers\ClassroomController::class, 'index'])->name('classrooms.index');
    Route::get('/contacts/create', [App\Http\Controllers\ContactController::class, 'create'])->name('contacts.create');
    Route::post('/contacts', [App\Http\Controllers\ContactController::class, 'store'])->name('contacts.store');


    Route::middleware('guest')->group(function () {
        Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
        Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'create'])->name('register');
    });

    //classrooms
    Route::get('classrooms/create', [App\Http\Controllers\ClassroomController::class, 'create'])->name('classrooms.create');
    Route::post('classrooms', [App\Http\Controllers\ClassroomController::class, 'store'])->name('classrooms.store');
    Route::put('classrooms/{classroom}', [App\Http\Controllers\ClassroomController::class, 'update'])->name('classrooms.update');
    Route::get('classrooms/{classroom}', [App\Http\Controllers\ClassroomController::class, 'show'])->name('classrooms.show');
    Route::delete('classrooms/{classroom}', [App\Http\Controllers\ClassroomController::class, 'destroy'])->name('classrooms.destroy');
    Route::get('classrooms/{classroom}/edit', [App\Http\Controllers\ClassroomController::class, 'edit'])->name('classrooms.edit');

    //courses
    Route::get('courses', [App\Http\Controllers\CourseController::class, 'index'])->name('courses.index');
    Route::get('courses/create', [App\Http\Controllers\CourseController::class, 'create'])->name('courses.create');
    Route::post('courses', [App\Http\Controllers\CourseController::class, 'store'])->name('courses.store');
    Route::put('courses/{course}', [App\Http\Controllers\CourseController::class, 'update'])->name('courses.update');
    Route::delete('courses/{course}', [App\Http\Controllers\CourseController::class, 'destroy'])->name('courses.destroy');
    Route::get('courses/{course}', [App\Http\Controllers\CourseController::class, 'show'])->name('courses.show');
    Route::get('courses/{course}/edit', [App\Http\Controllers\CourseController::class, 'edit'])->name('courses.edit');

    //attach courses to classroom
    Route::post('classroom/courses/{id}/create', [App\Http\Controllers\ClassroomCoursesController::class, 'create']);
    Route::delete('classroom/courses/{id}', [App\Http\Controllers\ClassroomCoursesController::class, 'destroy']);

    //upload theory, assignment material
    Route::get('upload-file/theory/create', [App\Http\Controllers\TheoryController::class, 'createForm'])->name('create.theory.form');
    Route::post('upload-file/theory', [App\Http\Controllers\TheoryController::class, 'fileUpload'])->name('upload.theory');
    Route::get('upload-file/assignment/create', [App\Http\Controllers\AssignmentController::class, 'createForm'])->name('create.assignment.form');
    Route::post('upload-file/assignment', [App\Http\Controllers\AssignmentController::class, 'fileUpload'])->name('upload.assignment');

    //download theory, assignment material
    Route::get('/file-download/theory/{theory}', [App\Http\Controllers\TheoryController::class, 'fileDownload'])->name('download.theory');
    Route::get('/file-download/assignment/{assignment}', [App\Http\Controllers\AssignmentController::class, 'fileDownload'])->name('download.assignment');

    //user profile
    Route::get('user/profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('user/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');
    Route::delete('user/{user}', [App\Http\Controllers\ProfileController::class, 'destroy'])->name('user.destroy');




Route::get('logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('auth.logout');



    Auth::routes();

