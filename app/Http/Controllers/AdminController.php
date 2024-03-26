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

    public function AdminProductStore(Request $request)
    {
        $validatedInput = $request->validate([ // Rename to validatedInput
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name' => 'required|string|max:255',
            'price' => 'nullable|string|min:0',
            'stock' => 'nullable|string|min:0',
            'description' => 'required|string',
        ]);


        //Handle photo upload (if uploaded)

        if ($request->file('photo')) {
            $photo = $request->file('photo');
            @unlink(public_path('upload/admin_images/'.$data->photo));
            $photoName = date('YmdHi').$photo->getClientOriginalName();
            $photo->move(public_path('upload/admin_images'), $photoName);
            $validatedInput['photo'] = $photoName;
        }



    
        $product = Product::create($validatedInput);
    
        $notification = array(
            'message' => 'Course Created Successfully',
            'alter-type' => 'success'
        );


        return redirect()->back()->with($notification);
    } // end method



}
