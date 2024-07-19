<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
      $fields = $request-> validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:3']
       ]);


       //Register
      $user = User::create($fields);

      //Login
      Auth::login($user);

      //Redirect
      return redirect()->route('home');
    }

    public function login(Request $request){
        $fields = $request-> validate([
            'email' => ['required', 'email', 'max:255'],
            'password' => ['required']
       ]);

       if(Auth::attempt($fields, $request->remember)) {
        return redirect()->route('home');
       }else{
        return back()->withErrors([
            'failed' => 'The Provided credentials do not match our records.'
        ]);
       }
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect()->route('login');
    }

}
