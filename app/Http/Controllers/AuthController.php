<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    function showRegister() {
        return view('register');
    }

    function submitRegister(Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        // dd($user);
        return redirect()->route('login.show');
    }

    function showLogin() {
        return view('login');
    }

    function submitLogin(Request $request) {
        $data = $request->only('email', 'password');

        if(Auth::attempt($data)) {
            $request->session()->regenerate();
            return redirect()->route('users.home');
        }else {
            return redirect()->back()->with('failed', 'Wrong Email and Password input');
        }
    }

    function logout() {
        Auth::logout();
        return redirect()->route('login.show');
    }
}
