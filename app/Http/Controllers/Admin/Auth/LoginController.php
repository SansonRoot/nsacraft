<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    //

    protected $redirectTo = '/admin/dashboard';

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

        if(Auth::guard('admin')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
            return redirect('/shop/dashboard');
        }
        return redirect('/admin/login');
    }

    public function showLoginForm(){
        return view('admin.auth.login');
    }


}
