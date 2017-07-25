<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['domain' => env('BOSS_DOMAIN'), 'namespace' => 'Admin'], function () {
    Route::get('/', 'DashController@dash');
    Route::get('/dash', 'DashController@index');

    Route::get('/user/menu/list', 'UserController@menuList');//菜单
    Route::get('/user/menu/add', 'UserController@menuAdd');
    Route::post('/user/menu/add', 'UserController@menuAdd');
    Route::get('/user/menu/{id}/update', 'UserController@menuUpdate');
});
