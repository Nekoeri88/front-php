<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Administrator Routes
|--------------------------------------------------------------------------
|
*/


Route::get('/', ['as' => '', 'uses' => 'BaseController@getDashboard']);