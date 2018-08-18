<?php

use Illuminate\Http\Request;

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

Route::post('/1.0/register', 'Api\UserController@store')->name('api.register');

Route::middleware(['auth:api'])->namespace('Api')
    ->prefix('1.0')
    ->group(function () {
    Route::apiResource('about', 'AboutController');
    Route::apiResource('help', 'HelpController');
    Route::apiResource('how', 'HowController');
    Route::apiResource('plan', 'PlanController');
    Route::apiResource('why', 'WhyController');
});