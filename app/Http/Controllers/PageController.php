<?php

namespace App\Http\Controllers;
use App\Slide;
use App\User;
use App\Product;
use Hash;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        $slides = Slide::All();
        //lấy toàn bộ
        // $newProducts = Product::where('new', 1)->get();

        //đánh số trang
        // $newProducts = Product::where('new', 1)->paginate(4);
        // $promotionProducts = Product::where('promotion_price', '<>', '0')->paginate(8);
        $newProducts = Product::where('new', 1)->paginate(4, ['*'], 'pag');
        $promotionProducts = Product::where('promotion_price', '<>', '0')->paginate(8, ['*'], 'page');
        // return view('page.trangchu', ['slides'=>$slides]);
        return view('page.trangchu', compact('slides', 'newProducts', 'promotionProducts'));
    }

    public function getRegister() {
        return view('page.register');
    }

    public function postRegister(Request $req) {
        $this->validate(
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:6|',
                'confirm_password'=>'required|same:password',
                'fullname'=>'required'
            ],[
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
        return redirect()->back();
    }

    

    public function getContact() {
        return view('page.contact');
    }

    public function getAbout() {
        return view('page.about');
    }
}
