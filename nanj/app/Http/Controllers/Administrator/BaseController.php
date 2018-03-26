<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

/**
 * Class BaseController
 *
 * @package App\Http\Controllers\Api
*/
class BaseController extends Controller
{
    function __contruct()
    {
        //
    }

    public function getDashboard (Request $request) 
    {
        return view('administrator.dashboard');
    }

}
