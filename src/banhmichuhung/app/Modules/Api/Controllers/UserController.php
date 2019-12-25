<?php
namespace App\Modules\Api\Controllers;

use Illuminate\Http\Request;
use App\Modules\Models\User;
use Hash;


class UserController extends Controller{
    
    public function __construct(){
        parent::__construct();
    }

    public function getAllUser() {
        $user = User::all();
        return response()->json($user, 200);
    }

    public function me() {
        try {
            $user = auth()->userOrFail();
        } catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e) {
            return response()->json(['error' => $e->getMessage()]);
        }
        return response()->json(['userinfo' => $user]);
    }

    public function refresh() {
        try {
            $newToken = auth()->refresh();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => $e->getMessage()], 401);
        }
        return response()->json(['token' => $newToken]);
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
        $creds = $req->only(['email', 'password']);
        $token = auth()->attempt($creds);
        if (!$token) {
            return response()->json(['error'=>'incorrect email or password'], 500);
        }
        return $this->respondWithToken($token);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }

    public function logout(Request $req) {
        
    }
}