<?php

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


//Route::middleware('auth')->group(function () {

    Route::post('classrooms/{classroom}/create', [App\Http\Controllers\Api\ClassroomToggleController::class, 'create']);

    //Route::post('notifications', 'NotificationController@store');
    //Route::delete('notifications/{notification}', 'NotificationController@destroy');
    //Route::put('notifications/{notification}', 'NotificationController@update');

    //Route::get('admin/media', 'MediaController@index');
    //Route::post('admin/media', 'MediaController@store');
    //Route::put('admin/media/{media}', 'MediaController@update');
    //Route::delete('admin/media/{media}', 'MediaController@destroy');
    //Route::get('media/create', 'MediaController@create');
    //Route::put('media/description/{media}', 'MediaController@updateDescription');

//});
