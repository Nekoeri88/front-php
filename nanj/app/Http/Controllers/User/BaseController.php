<?php

namespace App\Http\Controllers\User;

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

	protected $redirectTo = '/user';


    function __contruct(Request $request)
    {
    	
    }

    public function getProfile (Request $request, Guard $auth) 
    {
        return view('user.profile');
    }

    public function getLogout (Request $request) 
    {
        Auth::logout();
        return view('auth.login');
    }

}
