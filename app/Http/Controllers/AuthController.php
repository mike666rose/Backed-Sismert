<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    //Register user
    public function register(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'us_login' => 'required|string|max:50',
            'us_contrasenia' => 'required|min:6|confirmed',
            'us_estado' => 'required'
        ]);

        //create user
        $user = User::create([
            'us_login' => $attrs['us_login'],
            'us_contrasenia' => bcrypt($attrs['us_contrasenia']),
            'us_estado' => $attrs['us_estado']
            
        ]);

        //return user & token in response
        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ], 200);
        
    }
    

    // login user
    public function login(Request $request)
    {
        //validate fields
        $attrs = $request->validate([
            'us_login' => 'required|us_login',
            'us_contrasenia' => 'required|min:6'
        ]);

        // attempt login
        if(!Auth::attempt($attrs))
        {
            return response([
                'message' => 'Invalid credentials.'
            ], 403);
        }

        //return user & token in response
        return response([
            'user' => auth()->user(),
            'token' => auth()->user()->createToken('secret')->plainTextToken
        ], 200);
    }

    // logout user
    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response([
            'message' => 'Logout success.'
        ], 200);
    }

    // get user details
    public function user()
    {
        return response([
            'user' => auth()->user()
        ], 200);
    }

   
}