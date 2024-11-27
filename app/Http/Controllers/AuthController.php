<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use App\Models\AhliPertanian;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function register(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:petani,email|unique:ahlipertanian,email',
            'password' => 'required|string|confirmed|min:8',
            'user_type' => 'required|in:petani,ahliPertanian'
        ]);

        if ($request->user_type == 'petani') {
            Petani::create([
                'nama_petani' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        } else {
            AhliPertanian::create([
                'nama_ahlipertanian' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        // Redirect setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Account created successfully!');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:petani,ahliPertanian',
        ]);

        // Cek kredensial petani

        $credentials = $request->only('email', 'password');


        if ($request->user_type == 'petani') {
            if (Auth::guard('web')->attempt($credentials)) {
                return redirect()->intended('/dashboard');
            }
        } else {
            if (Auth::guard('ahli')->attempt($credentials)) {
                return redirect()->intended('/dashboard');
            }
        }
    
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
