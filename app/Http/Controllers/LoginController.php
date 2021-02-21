<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request) {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        $user = User::where('email', '=', $request->input('email'))->first();
        if(optional($user)->exists) {
            if(Hash::check($request->input('password'), $user->password)) {
                $token = $user->createToken(time().$request->input('email'))->plainTextToken;
                return response(['token' => $token, 'status' => 1], 200);
            }
        }

        return response(['msg' => 'User doesn\'t match'], 500);
    }

    public function getUsers() {
        return User::all();
    }
}
