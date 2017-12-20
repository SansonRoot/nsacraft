<?php

namespace App\Http\Controllers\Shop\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        if(Auth::guard('shop')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect('/shop/dashboard');
        }
        return redirect('/shop/login');
    }

    public function showLoginForm(){
        return view('shop.auth.login');
    }
}
