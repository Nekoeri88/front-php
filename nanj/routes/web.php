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

