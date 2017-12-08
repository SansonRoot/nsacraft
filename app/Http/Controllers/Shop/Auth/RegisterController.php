<?php

namespace App\Http\Controllers\Shop\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
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
        $this->middleware('guest');
    }

    public function register(Request $request){

    }

    public function getRegistrationForm(){
        return view('shop.auth.register');
    }
}
