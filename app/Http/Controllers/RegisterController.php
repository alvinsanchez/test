<?php

namespace App\Http\Controllers;

use App\Events\Registration\UserCreate;
use App\Events\Users\LoadUsers;
use App\Mail\UserRegistration;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    public function register(Request $request) {
        $validated = $request->validate([
           'name' => 'required|string',
           'email' => 'required|email',
           'password' => 'required'
        ]);

      $user = User::create($validated);
      if(optional($user)->exists) {
//          UserCreate::dispatch($user);
          broadcast(new LoadUsers($user))->toOthers();
      }
    }
}
