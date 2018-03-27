<?php

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', ['as' => '', 'uses' => 'BaseController@getDashboard']);
Route::get('/dashboard', ['as' => 'administrator.dashboard', 'uses' => 'BaseController@getDashboard']);