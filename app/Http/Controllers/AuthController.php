<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;


class AuthController extends Controller{

    public function login(Request $request)
    {
        return view('login');
    }
    public function forgot_password(Request $request)
    {
        return view('forgot_password');
    }
    public function register(Request $request)
    {
        return view('register');
    }

    //tumetesting lang ako

}


?>