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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/day', [\App\Http\Controllers\Api\DateController::class, 'getToday'])->name('today');
Route::get('/day/{date}', [\App\Http\Controllers\Api\DateController::class, 'getOneDay'])->where('date', '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])')->name('specificDay');
Route::get('/day/{date}/interval/{interval}', [\App\Http\Controllers\Api\DateController::class, 'getMoreDays'])->where(['date' => '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])', 'interval' => '[0-9]+'])->name('interval');
Route::get('/week/{date}', [\App\Http\Controllers\Api\DateController::class, 'getOneWeek'])->where('date', '\d{4}-(0[1-9]|1[0-2])-(0[1-9]|[12][0-9]|3[01])')->name('week');
