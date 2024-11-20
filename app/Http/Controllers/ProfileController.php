<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Petani;


class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        return view('profile', compact('user')); // Sesuaikan nama view jika diperlukan
    }

    public function update(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Update nama pengguna
        $user = Auth::user();
        $user->update(['nama_petani' => $request->name,]);

        // Redirect dengan pesan sukses
        return redirect()->route('profile')->with('success', 'Name updated successfully!');
    }

}
