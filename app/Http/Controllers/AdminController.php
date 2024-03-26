<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('admin.index');
    } // end method


    public function AdminLogin(){
        return view('admin.admin_login');
    }  // end method










    
    // admin product

    public function AdminAddProduct(){
        return view('admin.admin_add_product');
    } // end method


}
