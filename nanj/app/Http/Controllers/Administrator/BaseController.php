<?php

namespace App\Http\Controllers\Administrator;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Admin;
use Illuminate\Contracts\Auth\Guard;

/**
 * Class BaseController
 *
 * @package App\Http\Controllers\Api
*/
class BaseController extends Controller
{
	protected $user;

	protected $redirectTo = '/dashboard';


    function __contruct(Request $request)
    {
    	$this->middleware('auth:admin');
    }

    public function getDashboard (Request $request, Guard $auth) 
    {
        return view('administrator.dashboard');
    }

    public function getLogin (Request $request) 
    {
        return view('auth.login');
    }

}
