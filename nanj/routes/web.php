<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

    /**
     * TOP表示
     */
    Route::match(['get', 'post'], '/', 'HomeController@index');

    /**
     * 完了画面表示
     */
    Route::post('/thanks', 'HomeController@thanks');

    /**
     * 言語切替
     */
    Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'LanguageController@switchLang']);

    /**
     * 川柳表示
     */
    Route::get('/poem', 'HomeController@poem');

    Route::get('/home', 'HomeController@index')->name('home');
    
    Auth::routes();

    /**
    * admin authentication
    */
    Route::get('administrator/register', ['as' => 'administrator.register', 'uses' => 'Auth\AdminLoginController@getLogin']);
    Route::get('administrator/login', ['as' => 'administrator.login', 'uses' => 'Auth\AdminLoginController@getLogin']);
    Route::post('administrator/login', ['as' => 'administrator.login', 'uses' => 'Auth\AdminLoginController@postLogin']);
    Route::get('administrator/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
    Route::get('user/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);

