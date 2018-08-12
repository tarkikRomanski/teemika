<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
Route::group(['middleware'=>'web'], function (){

    Route::match(['get', 'post'], '/', ['uses'=>'PageController@index', 'as'=>'index']);
    Route::get('/support', ['uses'=>'PageController@support', 'as'=>'support']);
    Route::get('/sales', ['uses'=>'PageController@sales', 'as'=>'sales']);
    Route::get('/marketing', ['uses'=>'PageController@marketingPage', 'as'=>'marketing']);
    Route::get('/order/{order}', ['uses'=>'PageController@order', 'as'=>'order']);
    Route::post('/order', ['uses'=>'PageController@order', 'as'=>'order']);

    Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
    Route::post('login', 'Auth\LoginController@login')->name('login.post');
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
});

Route::get('/admin', ['uses' => 'AdminController@index', 'as' => 'admin']);