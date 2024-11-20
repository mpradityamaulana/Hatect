<?php

namespace App\Http\Controllers;

use App\Models\Petani;
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
            'email' => 'required|string|email|max:255|unique:petani',
            'password' => 'required|string|confirmed|min:8',
        ]);

        // Simpan data petani ke database
        Petani::create([
            'nama_petani' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Enkripsi password
        ]);

        // Redirect setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Account created successfully!');
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cek kredensial petani
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Jika berhasil, arahkan ke halaman dashboard atau halaman lainnya
            return redirect()->intended('/dashboard');
        }

        // Jika gagal, tampilkan pesan error
        return back()->withErrors(['email' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
