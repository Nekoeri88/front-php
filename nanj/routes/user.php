<?php

/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', ['as' => '', 'uses' => 'BaseController@getProfile']);
Route::get('/profile', ['as' => 'user.profile', 'uses' => 'BaseController@getProfile']);
