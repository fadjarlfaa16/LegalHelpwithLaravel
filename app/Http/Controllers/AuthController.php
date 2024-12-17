<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{

    // public function showLogin()
    // {
    //     return view('auth.login');
    // }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    // if (Auth::attempt($credentials)) {
    //     $user = Auth::user();

    //     if ($user->role === 'admin') {
    //         return redirect()->route('admin.dashboard');
    //     } elseif ($user->role === 'consultant') {
    //         return redirect()->route('consultant.dashboard');
    //     } else {
    //         return redirect()->route('users.index');
    //     }
    // }

    // return back()->withErrors(['email' => 'Email atau password salah.']);
    // }

    public function showRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:consultant,user',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
?>