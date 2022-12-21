<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $validation  = Validator::make($request->all(), [
            'name'      => 'required|string|min:3|max:50',
            'username'  => 'required|string|unique:users|max:100',
            'email'     => 'required|email|unique:users|max:100',
            'password'  => 'required|confirmed|max:8'
        ]);

        if ($validation->fails()) {
            return response()->json([
                'status'    => 400,
                'messages'  => $validation->getMessageBag()
            ]);
        }else {
            $user = new User();
            $user->name      = $request->name;
            $user->username  = $request->username;
            $user->email     = $request->email;
            $user->password  = Hash::make($request->password);
            $user->save();
            return response()->json([
                'status' => 200,
                'messages'  => 'Registration successful'
            ]);
        }
    }
}
