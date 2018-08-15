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
    Route::resource('about', 'AboutController')->except(['edit', 'create']);
    Route::resource('help', 'HelpController')->except(['edit', 'create']);
    Route::resource('how', 'HowController')->except(['edit', 'create']);
    Route::resource('plan', 'PlanController')->except(['edit', 'create']);
    Route::resource('why', 'WhyController')->except(['edit', 'create']);
});