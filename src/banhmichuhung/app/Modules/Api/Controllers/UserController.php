<?php
namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Modules\Models\User;
use Auth;
use Hash;


class UserController extends Controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function getAllUser() {
        $user = User::all();
        return response()->json($user, 200);
    }

    public function register(Request $req) {
        $form = [
            "email"=>$req->email,
            "password"=>$req->password,
            "confirm_password"=>$req->confirm_password,
            "fullname"=>$req->fullname,
            "address"=>$req->address,
            "phone"=>$req->phone
        ];

        $user = new User();
        $user->full_name = $req->fullname;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->phone = $req->phone;
        $user->address = $req->address;
        $user->save();

        $registerSuccess = [
            "message"=>"register success"
        ];
        return response()->json($registerSuccess, 200);
    }

    public function login(Request $req) {
        $credentials = [
            "email"=>$req->email,
            "password"=>$req->password
        ];

        $loginSuccess = [
            "message"=>"login success"
        ];

        $loginFailed = [
            "message"=>"login failed"
        ];

        // if(Auth::attempt($credentials)) {
        //     //login success
        //     return response()->json($credentials, 200);
        // } else {
        //     //login failed
        //     return response()->json($credentials, 500);
        // }

        return response()->json($credentials, 200);
    }

    public function logout(Request $req) {
        
    }
}