<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     *  言語切り替え処理 渡ってきた言語ファイルに切り替える
     * @param $lang
     * @return　Redirect
     */
    public function switchLang($lang)
    {
        if (array_key_exists($lang, Config::get('languages'))) {
            Session::put('applocale', $lang);
        }
        return Redirect::back();
    }
}
