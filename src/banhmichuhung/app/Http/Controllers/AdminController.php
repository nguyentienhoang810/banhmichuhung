<?php

namespace App\Http\Controllers;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showAdminLogin() {
        return view('admin.adminLogin');
    }

    public function login(AdminLoginRequest $request) {
        // echo $request->username;
        // echo $request->pass;
        // $request->validate([
        //     'username'=>'required|email',
        //     'pass'=>'required|min:3',
        // ],[
        //     'username.required'=>'Phải điền username',
        //     'username.email'=>'Không đúng định dạng email',
        //     'pass.required'=>'Phải điền email',
        //     'pass.min'=>'Password phải nhiều hơn 3 ký tự'
        // ]);
        return view('admin.admin');
    }
}
