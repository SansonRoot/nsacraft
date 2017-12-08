<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //

    public function __construct(){
        $this->middleware('guest');
    }

    public function index(){
        return view('index');
    }

    public function showCategories(){
        return view('category');
    }

    public function showProducts(){
        return view('products');
    }

    public function getBlog(){
        return view('blog');
    }

}
