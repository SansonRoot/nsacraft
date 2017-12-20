<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    //

//    public function __construct(){
//        $this->middleware('auth:admin');
//    }

    public function dashboard(){
        return view('admin.dashboard');
    }

    public function showAdmins(){
        return view('admin.admins');
    }

    public function showAddAdmin(){
        return view('admin.addadmin');
    }

    public function showAddUser(){
        return view('admin.adduser');
    }

    public function showUsers(){
        return view('admin.users');
    }

    public function showShops(){
        return view('admin.shops');
    }

    public function showAddShop(){
        return view('admin.addshop');
    }
    public function showProducts(){
        return view('admin.products');
    }
    public function showAddProduct(){
        return view('admin.addproduct');
    }
    public function showCategories(){
        return view('admin.categories');
    }
    public function showAddCategory(){
        return view('admin.addcategory');
    }
    public function showOrders(){
        return view('admin.orders');
    }
}
