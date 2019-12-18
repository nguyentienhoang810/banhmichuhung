<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Hash;

class UserController extends Controller
{
    public function getRegister() {
        return view('page.register');
    }

    public function postRegister(Request $req) {
        $req->validate(
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|',
                'confirm_password'=>'required|same:password',
                'fullname'=>'required'
            ],
            [
                'email.required'=>'メールアドレスを入力してください',
                'email.email'=>'メールアドレスを正しく入力してください',
                'email.unique'=>'このメールアドレスは既に登録されました',
                'password.required'=>'パスワードは必須',
                'password.min'=>'パスワードは6文字以上',
                'confirm_password.required'=>'入力必須',
                'confirm_password.same'=>'パスワードと同じのは必須',
                'fullname.required'=>'入力必須'
            ]);
        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();
        Session::flash('register_success', "REGISTER SUCCESSFUL");
        return redirect()->back();
    }
}
