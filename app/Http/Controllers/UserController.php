<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function Register()
    {
        return view('auth.register');
    }

    public function ForgotPassword()
    {
        return view('auth.forgot');
    }
    public function ResetPassword()
    {
        return view('auth.reset');
    }

    // register user method
    public function RegisterUser(Request $request)
    {
        print_r($_POST);
    }
}
