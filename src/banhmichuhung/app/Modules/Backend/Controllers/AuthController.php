<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
use App\Modules\Models\Admin;
use Hash;

class AuthController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function getDashboard() {
        return view('Backend::page.dashboard');
    }

    public function getLogin() {
        return view('Backend::page.login');
    }

    public function postLogin() {

    }

    public function getRegister() {
        return view('Backend::page.register');
    }

    public function postRegister() {

    }

    public function postLogout() {

    }
}
