<?php

use App\Http\Controllers\Api\PeriodController;
use App\Http\Controllers\Api\BookingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//periods
Route::get('periods', [PeriodController::class, 'index'])->name('periods.index');
Route::get('periods/{period}', [PeriodController::class, 'show'])->name('periods.show');

//booking form
Route::post('booking', [BookingController::class, 'store'])->name('booking.store');



