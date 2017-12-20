<?php

namespace App\Http\Controllers;

use App\Product;
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
        $products = Product::all()->orderBy('updated_at','desc');
        return view('products');
    }

    public function getBlog(){
        return view('blog');
    }

    public function landing(){
        return view('landing');
    }



}
