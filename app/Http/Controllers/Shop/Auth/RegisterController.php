<?php

namespace App\Http\Controllers\Shop\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Shop;

class RegisterController extends Controller
{
    //
    use RegistersUsers;

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'shop_name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'shop_city' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:shops',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function register(Request $request)
    {
        $validation = $this->validator($request->all());
        if($validation->fails()){
            return view('shop.auth.register',['errors'=>$validation->getMessageBag()]);
        }

        $shop= Shop::create([
            'shop_name' => $request['shop_name'],
            'email'=>$request['email'],
            'address' => $request['address'],
            'shop_city' => $request['shop_city'],
            'phone' => $request['phone'],
            'verification_code' => '1234',
            'password' => bcrypt($request['password']),
        ]);

        if($shop){

            if(Auth::guard('shop')->attempt(['email'=>$request['email'],'password'=>$request['password']])){
                return redirect('/shop/dashboard');
            }else{
                return redirect('/shop/login');
            }
        }else{
            return view('shop.auth.register');
        }
    }



    public function showRegistrationForm(){
        return view('shop.auth.register');
    }

    public function showVerifyForm(){
        return view('shop.auth.verify');
    }
}
