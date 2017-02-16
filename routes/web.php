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

    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::get('logout', 'Auth\LoginController@logout');
});


Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::get('/', ['uses'=>'AdminController@index', 'as'=>'admin.index']);
    Route::match(['get', 'post'], '/services', ['uses'=>'AdminController@services', 'as'=>'admin.services']);
    Route::match(['get', 'post'], '/about', ['uses'=>'AdminController@about', 'as'=>'admin.about']);
    Route::match(['get', 'post'], '/why', ['uses'=>'AdminController@why', 'as'=>'admin.why']);
    Route::match(['get', 'post'], '/how', ['uses'=>'AdminController@how', 'as'=>'admin.how']);
    Route::match(['get', 'post'], '/message', ['uses'=>'AdminController@message', 'as'=>'admin.message']);
    Route::match(['get', 'post'], '/title', ['uses'=>'AdminController@title', 'as'=>'admin.title']);
    Route::match(['get', 'post'], '/help', ['uses'=>'AdminController@help', 'as'=>'admin.help']);
    Route::match(['get', 'post'], '/pages/support', ['uses'=>'AdminController@pagesSupport', 'as'=>'admin.pages.support']);
    Route::match(['get', 'post'], '/pages/sales', ['uses'=>'AdminController@pagesSales', 'as'=>'admin.pages.sales']);
    Route::match(['get', 'post'], '/pages/marketing', ['uses'=>'AdminController@pagesMarketing', 'as'=>'admin.pages.marketing']);
    Route::match(['get', 'post'], '/types', ['uses'=>'TypeController@index', 'as'=>'admin.types']);


    Route::get('/order', ['uses'=>'AdminController@order', 'as'=>'admin.order']);


    Route::match(['get', 'post'], '/plans/add', ['uses'=>'AdminController@plansAdd', 'as'=>'admin.plans.add']);
    Route::match(['get', 'post'], '/plans/edit', ['uses'=>'AdminController@plansEdit', 'as'=>'admin.plans.edit']);

    Route::match(['get', 'post'], '/contact/edit', ['uses'=>'AdminController@contactEdit', 'as'=>'admin.contact.edit']);

    Route::match(['get', 'post'], '/support', ['uses'=>'AdminController@support', 'as'=>'admin.support']);


});
