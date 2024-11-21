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
            'user_type' => 'required|in:petani,ahlipertanian'
        ]);

        // Tentukan model berdasarkan user_type
        if ($request->user_type == 'petani') {
            $model = new Petani();
        } else {
            $model = new AhliPertanian();
        }

        // Simpan data ke model yang sesuai
        $model->nama_petani = $request->name;
        $model->email = $request->email;
        $model->password = Hash::make($request->password);
        $model->save();

        // Redirect setelah berhasil registrasi
        return redirect()->route('login')->with('success', 'Account created successfully!');
        \Log::info('Data received:', $request->all());
    }

    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:petani,ahlipertanian',
        ]);

        // Cek kredensial petani
        $credentials = $request->only('email', 'password');
        if ($request->user_type === 'petani' && Auth::guard('web')->attempt($credentials)) {
            return redirect()->intended('/dashboard');
        } elseif ($request->user_type === 'ahlipertanian' && Auth::guard('ahli')->attempt($credentials)) {
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
