<?php

namespace App\Http\Controllers\Shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ShopController extends Controller
{
    //

//    public function __construct(){
//        $this->middleware('auth:shop');
//    }

    public function dashboard(){
        return view('shop.dashboard');
    }

    public function getProfile(){
        return view('shop.profile');
    }

    public function getMyAds(){
        return view('shop.my-ads');
    }
}
