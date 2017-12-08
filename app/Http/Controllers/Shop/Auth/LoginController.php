<?php

namespace App\Http\Controllers\Shop\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    protected $redirectTo = '/shop/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){

    }

    public function showLoginForm(){
        return view('shop.auth.login');
    }
}
